<?php 
	$user_ip = $_SERVER['REMOTE_ADDR'];
	if ($user_ip == "94.21.91.106") {
		$sziszi = "http://bent.suli.sziszinfo.hu/moodle/";
	} else {
		$sziszi = "http://suli.sziszinfo.hu:8080/moodle/";
	}
	
	header("Location: ".$sziszi);
	exit;
?>