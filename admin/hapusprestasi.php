<?php

$ambil = $koneksi->query("SELECT * FROM prestasi WHERE id_prestasi = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambar = $pecah['gambar'];

if(file_exists("../images/gambar_prestasi/$gambar")){
  unlink("../images/gambar_prestasi/$gambar");
}

$koneksi->query("DELETE FROM prestasi WHERE id_prestasi = '$_GET[id]'");

echo "<script>alert('Data prestasi terhapus');</script>";
echo "<script>location='index.php?halaman=prestasi';</script>";
