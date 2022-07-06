<?php

	//INTEGRASI KONEKSI
	require_once('connection.php');

	// FUNGSI SQL INSERT DATA
	$sql = " INSERT INTO social_media_links(title, url) VALUES ('Youtube', 'https://www.youtube.com/channel/UCtB90R0g-_tX6saz1jZgr8g')";

	//FUNGSI MENGIRIM DATA KE DATABASE
	$connection ->query($sql);
?>