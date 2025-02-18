 <?php
$ambil = $koneksi->query("SELECT * FROM berita WHERE id_berita = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$originalDate = $pecah['tanggal_berita'];
$newDate = date("d/m/Y", strtotime($originalDate));
?>

 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - berita</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Berita</h1><br>

    <!-- Data -->
<div class="card shadow mb-4"><br>
<div class="card-body">
  <div>
    <!-- Mulai -->
            <div class="container">

                <h3 style="text-align: center;"><strong><?= $pecah['judul_berita']; ?></strong></h3><br>
                <div class="gallery-item" style="display: flex; justify-content: center;">
                <img width="300" src="../images/gambar_berita/<?= $pecah['gambar_berita']; ?>" alt="<?= $pecah['judul_berita']; ?>">
                </div><br>
                <div align="justify"><?= $pecah['isi_berita1']; ?></div>
                <br>
                <div>
                <p align="right"><i><small><?= $newDate; ?></small></i></p>
                </div>
            
             </div>
</div>
</div>
</div>
<div class="mb-4">
                <a href="index.php?halaman=berita" class="btn btn-secondary btn-md">Kembali</a> 
                <a href="index.php?halaman=ubahberita&id=<?= $pecah['id_berita']; ?>" class="btn btn-primary btn-md">Ubah</a> 
</div></div>
