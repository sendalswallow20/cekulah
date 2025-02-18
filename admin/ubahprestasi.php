<?php
$ambil = $koneksi->query("SELECT * FROM prestasi WHERE id_prestasi = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

if(isset($_POST['ubah'])){
  $tanggal_berita = date('Y-m-d');
  $namagambar = $_FILES['gambar']['name'];
  $lokasigambar = $_FILES['gambar']['tmp_name'];

  // jika gambar dirubah
  if(!empty($lokasigambar)){
    move_uploaded_file($lokasigambar, "../images/gambar_prestasi/$namagambar");

    $koneksi->query("UPDATE prestasi SET gambar_prestasi='$namagambar', nama_prestasi='$_POST[namapre]' WHERE id_prestasi='$_GET[id]'");
  }
  else{
    $koneksi->query("UPDATE prestasi SET nama_prestasi='$_POST[namapre]' WHERE id_prestasi='$_GET[id]'");
  }

  echo "<script>alert('Data berhasil diubah');</script>";
  echo "<script>location='index.php?halaman=prestasi';</script>";
}
?>


 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Ubah Prestasi</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Prestasi</h1>
    <p class="mb-4"></p>

<!-- Data -->
<div class="card shadow mb-4">
  <div class="card-header">Ubah data Prestasi</div>
<div class="card-body">
  <div>
    <!-- Form Mulai -->
<form action="" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="">Gambar prestasi</label><br>
        <img src="../images/gambar_prestasi/<?= $pecah['gambar_prestasi']?>" width="200">
      </div>

      <div class="form-group">
        <label for="">Ganti gambar</label>
        <input type="file" name="gambar" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Nama prestasi</label>
        <input type="text" name="namapre" class="form-control" value="<?= $pecah['nama_prestasi']; ?>">
      </div>

      <button name="ubah" class="btn btn-primary">Ubah</button>
      <a href="index.php?halaman=prestasi" class="btn btn-secondary">Batal</a> 
    </form>
  </div>

</div>
</div>
</div>

