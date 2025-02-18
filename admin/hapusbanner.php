<?php

$ambil = $koneksi->query("SELECT * FROM banner WHERE id_banner = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambar = $pecah['gambar'];

if(file_exists("../images/gambar_banner/$gambar")){
  unlink("../images/gambar_banner/$gambar");
}

$koneksi->query("DELETE FROM banner WHERE id_banner = '$_GET[id]'");

echo "<script>alert('Banner terhapus');</script>";
echo "<script>location='index.php?halaman=banner';</script>";

?>