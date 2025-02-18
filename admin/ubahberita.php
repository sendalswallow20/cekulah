<?php
$ambil = $koneksi->query("SELECT * FROM berita WHERE id_berita = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

if(isset($_POST['ubah'])){
  $namagambar = $_FILES['gambar']['name'];
  $lokasigambar = $_FILES['gambar']['tmp_name'];

  // jika gambar dirubah
  if(!empty($lokasigambar)){
    move_uploaded_file($lokasigambar, "../images/gambar_berita/$namagambar");

    $koneksi->query("UPDATE berita SET judul_berita='$_POST[judul]', isi_berita1='$_POST[isi1]', gambar_berita='$namagambar', tanggal_berita=NOW() WHERE id_berita='$_GET[id]'");
  }
  else{
    $koneksi->query("UPDATE berita SET judul_berita='$_POST[judul]', isi_berita1='$_POST[isi1]', tanggal_berita=NOW() WHERE id_berita='$_GET[id]'");
  }

  echo "<script>alert('Data berhasil diubah');</script>";
  echo "<script>location='index.php?halaman=berita';</script>";
}

?>


 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Ubah Berita</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Berita</h1>
    <p class="mb-4"></p>

<!-- Data -->
<div class="card shadow mb-4">
  <div class="card-header">Ubah data berita</div>
<div class="card-body">
  <div>
    <!-- Form Mulai -->
<form action="" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="">Gambar berita</label><br>
        <img src="../images/gambar_berita/<?= $pecah['gambar_berita']?>" width="200">
      </div>

      <div class="form-group">
        <label for="">Ganti gambar</label>
        <input type="file" name="gambar" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Judul</label>
        <input type="text" name="judul" class="form-control" value="<?= $pecah['judul_berita']; ?>">
      </div>

      <div class="form-group">
        <label for="">Isi teks 1</label>
        <textarea name="isi1" class="form-control" rows="5"><?= $pecah['isi_berita1']; ?></textarea>
      </div>

      <button name="ubah" class="btn btn-primary">Ubah</button>
      <a href="index.php?halaman=berita" class="btn btn-secondary btn-md">Batal</a> 
    </form>
  </div>

</div>
</div>
</div>

