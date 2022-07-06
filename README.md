# sacode-php-mentoring-week5-brian
Learn MySQL in PHP

## CREATE DATABASE
	
	CREATE DATABASE database_name

## DROP (DELETE) DATABASE

	DROP DATABASE database_name

## CREATE TABLE

	CREATE TABLE tutors (
		id INT(11) AUTO_INCREMENT PRIMARY KEY,
	    first_name VARCHAR(30) NOT NULL,
	    last_name VARCHAR(30) NULL
	)

## DROP (DELETE) TABLE
	
	DROP TABLE database_name

## CREATE CONNECTION

	<?php
		// BUAT KONEKSI TANPA DATABASE
		// $connection = new mysqli('localhost', 'root', '');

		// BUAT KONEKSI DENGAN DATABASE
		$connection = new mysqli('localhost', 'root', 'sagu');
		if(!$connection -> connect_error){
			echo "Koneksi berhasil";
		}
		else{
			echo "Koneksi Gagal";
		}

	?>

## CREATE TABLE

	<?php

		// INTEGRASI KONEKSI
		require_once('connection.php');

		// FUNGSI CREATE TABLE
		$sql = "CREATE TABLE students(
					id INT(11) AUTO_INCREMENT PRIMARY KEY,
					first_name VARCHAR(30) NOT NULL,
					last_name VARCHAR(50) NULL,
					email VARCHAR(50) NULL
				)";

		$connection -> query($sql);

	?>

## INSERT DATA

	<?php

		//INTEGRASI KONEKSI
		require_once('connection.php');

		// FUNGSI SQL INSERT DATA
		$sql = " INSERT INTO social_media_links(title, url) VALUES ('Youtube', 'https://www.youtube.com/channel/UCtB90R0g-_tX6saz1jZgr8g')";

		//FUNGSI MENGIRIM DATA KE DATABASE
		$connection ->query($sql);
	?>

## UPDATE DATA