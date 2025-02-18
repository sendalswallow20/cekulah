<?php

$ambil = $koneksi->query("SELECT * FROM profil WHERE id_profil = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambar = $pecah['gambar'];

if(file_exists("../images/gambar_profil/$gambar")){
  unlink("../images/gambar_profil/$gambar");
}

$koneksi->query("DELETE FROM profil WHERE id_profil = '$_GET[id]'");

echo "<script>alert('Data profil terhapus');</script>";
echo "<script>location='index.php?halaman=profil';</script>";
