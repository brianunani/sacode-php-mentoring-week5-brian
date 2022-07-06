<?php
	// BUAT KONEKSI TANPA DATABASE
	$connection = new mysqli('localhost', 'root', '');

	// BUAT KONEKSI DENGAN DATABASE
	if(!$connection -> connect_error){
		echo "Koneksi berhasil";
	}
	else{
		echo "Koneksi Gagal";
	}

?>