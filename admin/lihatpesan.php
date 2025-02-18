 <?php
$ambil = $koneksi->query("SELECT * FROM pesan WHERE id_pesan = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$originalDate = $pecah['tanggal_pesan'];;
$newDate = date("d-m-Y", strtotime($originalDate));
?>

 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Pesan</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Isi Pesan Pengguna</h1><br>

    <!-- Data -->
<div class="card shadow mb-4">
  <div class="card-header">Pesan dari: <?= $pecah['nama']; ?></div>
<div class="card-body">
  <div>
    <!-- Mulai -->
            <div class="container">
                <div>
                <h4><strong><?= $pecah['judul']; ?></strong></h4><hr>
                </div>

                <div> 
                <p align="justify"><?= $pecah['pesan']; ?></p>
                </div>


                <div>
                <p align="right"><i><small>Pesan tanggal <?= $newDate; ?></small></i></p>
                </div>
            
             </div>
</div>
</div>
</div>
<div class="mb-4">
                <a href="index.php?halaman=pesanpengunjung" class="btn btn-secondary btn-md">Kembali</a> 
</div></div>
