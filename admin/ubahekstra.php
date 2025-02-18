<?php
$ambil = $koneksi->query("SELECT * FROM ekstra WHERE id_ekstra = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

if(isset($_POST['ubah'])){
  $tanggal_berita = date('Y-m-d');
  $namagambar = $_FILES['gambar']['name'];
  $lokasigambar = $_FILES['gambar']['tmp_name'];

  // jika gambar dirubah
  if(!empty($lokasigambar)){
    move_uploaded_file($lokasigambar, "../images/gambar_ekstra/$namagambar");

    $koneksi->query("UPDATE ekstra SET gambar_ekstra='$namagambar', nama_ekstra='$_POST[namaeks]' WHERE id_ekstra='$_GET[id]'");
  }
  else{
    $koneksi->query("UPDATE ekstra SET nama_ekstra='$_POST[namaeks]' WHERE id_ekstra='$_GET[id]'");
  }

  echo "<script>alert('Data berhasil diubah');</script>";
  echo "<script>location='index.php?halaman=ekstra';</script>";
}
?>


 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Ubah ekstra</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah ekstra</h1>
    <p class="mb-4"></p>

<!-- Data -->
<div class="card shadow mb-4">
  <div class="card-header">Ubah data ekstra</div>
<div class="card-body">
  <div>
    <!-- Form Mulai -->
<form action="" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="">Gambar ekstra</label><br>
        <img src="../images/gambar_ekstra/<?= $pecah['gambar_ekstra']?>" width="200">
      </div>

      <div class="form-group">
        <label for="">Ganti gambar</label>
        <input type="file" name="gambar" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Nama ekstra</label>
        <input type="text" name="namaeks" class="form-control" value="<?= $pecah['nama_ekstra']; ?>">
      </div>

      <button name="ubah" class="btn btn-primary">Ubah</button>
      <a href="index.php?halaman=ekstra" class="btn btn-secondary">Batal</a> 
    </form>
  </div>

</div>
</div>
</div>

