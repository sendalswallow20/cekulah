<?php

$koneksi = new mysqli("localhost", "root", "", "db_sekolah");

// mengecek koneksi
if (!$koneksi) 
{
	die("Koneksi gagal: " . mysqli_connect_error());
}
