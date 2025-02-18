<?php

$ambil = $koneksi->query("SELECT * FROM fasilitas WHERE id_fasilitas = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambar = $pecah['gambar'];

if(file_exists("../images/gambar_fasilitas/$gambar")){
  unlink("../images/gambar_fasilitas/$gambar");
}

$koneksi->query("DELETE FROM fasilitas WHERE id_fasilitas = '$_GET[id]'");

echo "<script>alert('Data fasilitas terhapus');</script>";
echo "<script>location='index.php?halaman=fasilitas';</script>";
