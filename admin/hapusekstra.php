<?php

$ambil = $koneksi->query("SELECT * FROM ekstra WHERE id_ekstra = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambar = $pecah['gambar'];

if(file_exists("../images/gambar_ekstra/$gambar")){
  unlink("../images/gambar_ekstra/$gambar");
}

$koneksi->query("DELETE FROM ekstra WHERE id_ekstra = '$_GET[id]'");

echo "<script>alert('Data ekstra terhapus');</script>";
echo "<script>location='index.php?halaman=ekstra';</script>";
