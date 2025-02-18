<?php
$ambil = $koneksi->query("SELECT * FROM banner WHERE id_banner = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();


if(isset($_POST['ubah'])){
  $namagambar = $_FILES['gambar']['name'];
  $lokasigambar = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($lokasigambar, "../images/gambar_banner/$namagambar");

    $koneksi->query("UPDATE banner SET gambar='$namagambar' WHERE id_banner='$_GET[id]'");

  echo "<script>alert('Data berhasil diubah');</script>";
  echo "<script>location='index.php?halaman=banner';</script>";
}

?>


 <!-- Begin Page Content -->

<head><title>Admin SDN 3 Purwosari - Tambah Banner</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Banner</h1>
    <p class="mb-4">*ukuran gambar 2:1.</p>

<!-- Data -->
<div class="card shadow mb-4">
  <div class="card-header">Ubah gambar banner</div>
<div class="card-body">
  <div>
    <!-- Form Mulai -->
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <img src="../images/gambar_banner/<?= $pecah['gambar']?>" width="100%">
      </div>
        <div class="form-group">
        <input type="file" name="gambar" class="form-control">
      </div>

      <button name="ubah" class="btn btn-primary">Ubah</button>
      <a href="index.php?halaman=banner" class="btn btn-secondary">Kembali</a>
    </form>
  </div>

</div>
</div>
</div>




