<?php

$ambil = $koneksi->query("SELECT * FROM berita WHERE id_berita = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambar = $pecah['gambar'];

if(file_exists("../images/gambar_berita/$gambar")){
  unlink("../images/gambar_berita/$gambar");
}

$koneksi->query("DELETE FROM berita WHERE id_berita = '$_GET[id]'");

echo "<script>alert('Data berita terhapus');</script>";
echo "<script>location='index.php?halaman=berita';</script>";
