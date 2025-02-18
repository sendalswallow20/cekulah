 <?php
$ambil = $koneksi->query("SELECT * FROM profil WHERE id_profil = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Profil</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Profil</h1>

    <!-- Data -->
<div class="card shadow mb-4">
  <div class="card-header">Detail <?= $pecah['judul_profil']; ?></div>
<div class="card-body">
  <div>
    <!-- Mulai -->
            <div class="container">

                <h3 style="text-align: center;"><strong><?= $pecah['judul_profil']; ?></strong></h3>

                <div class="gallery-item" style="display: flex; justify-content: center;">
                <img width="300" src="../images/gambar_profil/<?= $pecah['gambar_profil']; ?>" alt="<?= $pecah['judul_profil']; ?>">
                </div><br>
                <div align="justify"><?= $pecah['isi_profil1']; ?></div>
            
             </div>
</div>
</div>
</div>
<div class="mb-4">
                <a href="index.php?halaman=profil" class="btn btn-secondary btn-md">Kembali</a> 
                <a href="index.php?halaman=ubahprofil&id=<?= $pecah['id_profil']; ?>" class="btn btn-primary btn-md">Ubah</a> 
</div></div>
