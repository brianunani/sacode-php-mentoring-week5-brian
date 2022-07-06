<?php

	// INTEGRASI KONEKSI
	require_once('connection.php');

	// FUNGSI BUAT DATABASE
	
	$sql = "CREATE DATABASE sagu";
	$connection -> query($sql);	

?>