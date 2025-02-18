<?php
$ambil = $koneksi->query("SELECT * FROM profil WHERE id_profil = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

if(isset($_POST['ubah'])){
  $tanggal_profil = date('Y-m-d');
  $namagambar = $_FILES['gambar']['name'];
  $lokasigambar = $_FILES['gambar']['tmp_name'];

  // jika gambar dirubah
  if(!empty($lokasigambar)){
    move_uploaded_file($lokasigambar, "../images/gambar_profil/$namagambar");

    $koneksi->query("UPDATE profil SET judul_profil='$_POST[judul]', isi_profil1='$_POST[isi1]', gambar_profil='$namagambar', tanggal_profil='$tanggal_profil' WHERE id_profil='$_GET[id]'");
  }
  else{
    $koneksi->query("UPDATE profil SET judul_profil='$_POST[judul]', isi_profil1='$_POST[isi1]', tanggal_profil='$tanggal_profil' WHERE id_profil='$_GET[id]'");
  }

  echo "<script>alert('Data berhasil diubah');</script>";
  echo "<script>location='index.php?halaman=profil';</script>";

  //print_r($_REQUEST);
}

?>


 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Ubah Profil</title></head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>


<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Profil</h1>
    <p class="mb-4"></p>

<!-- Data -->
<div class="card shadow mb-4">
  <div class="card-header">Ubah data profil</div>
<div class="card-body">
  <div>
    <!-- Form Mulai -->
<form action="" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="">Gambar profil</label><br>
        <img src="../images/gambar_profil/<?= $pecah['gambar_profil']?>" width="200">
      </div>

      <div class="form-group">
        <label for="">Ganti gambar</label>
        <input type="file" name="gambar" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="judul" class="form-control" value="<?= $pecah['judul_profil']; ?>">
      </div>

      <div class="form-group">
        <label for="">Isi teks 1</label>
        <textarea name="isi1" class="form-control"><?= $pecah['isi_profil1']; ?></textarea>
      </div>

      <button name="ubah" class="btn btn-primary">Ubah</button>
      <a href="index.php?halaman=profil" class="btn btn-secondary btn-md">Batal</a> 
    </form>
  </div>

</div>
</div>
</div>

