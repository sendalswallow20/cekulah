<?php
$ambil = $koneksi->query("SELECT * FROM fasilitas WHERE id_fasilitas = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

if(isset($_POST['ubah'])){
  $tanggal_berita = date('Y-m-d');
  $namagambar = $_FILES['gambar']['name'];
  $lokasigambar = $_FILES['gambar']['tmp_name'];

  // jika gambar dirubah
  if(!empty($lokasigambar)){
    move_uploaded_file($lokasigambar, "../images/gambar_fasilitas/$namagambar");

    $koneksi->query("UPDATE fasilitas SET nama_fasilitas='$_POST[namafas]', gambar_fasilitas='$namagambar' WHERE id_fasilitas='$_GET[id]'");
  }
  else{
    $koneksi->query("UPDATE fasilitas SET nama_fasilitas='$_POST[namafas]' WHERE id_fasilitas='$_GET[id]'");
  }

  echo "<script>alert('Data berhasil diubah');</script>";
  echo "<script>location='index.php?halaman=fasilitas';</script>";
}
?>


 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Ubah fasilitas</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah fasilitas</h1>
    <p class="mb-4"></p>

<!-- Data -->
<div class="card shadow mb-4">
  <div class="card-header">Ubah data fasilitas</div>
<div class="card-body">
  <div>
    <!-- Form Mulai -->
<form action="" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="">Gambar fasilitas</label><br>
        <img src="../images/gambar_fasilitas/<?= $pecah['gambar_fasilitas']?>" width="200">
      </div>

      <div class="form-group">
        <label for="">Ganti gambar</label>
        <input type="file" name="gambar" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Nama fasilitas</label>
        <input type="text" name="namafas" class="form-control" value="<?= $pecah['nama_fasilitas']; ?>">
      </div>

      <button name="ubah" class="btn btn-primary">Ubah</button>
      <a href="index.php?halaman=fasilitas" class="btn btn-secondary">Batal</a> 
    </form>
  </div>

</div>
</div>
</div>

