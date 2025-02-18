 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Banner</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Banner</h1><hr>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Banner</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody><?php $no=1; ?>
    <?php $ambil = $koneksi->query("SELECT * FROM banner") ?>
    <?php while($pecah = $ambil->fetch_assoc()): ?>
    <tr>
      <td><?= $no; ?></td>
      <td style="width:80%"><img src="../images/gambar_banner/<?= $pecah["gambar"]; ?>" width="100%"></td>
      <td>
        <a href="index.php?halaman=ubahbanner&id=<?= $pecah['id_banner']; ?>" class="btn btn-warning btn-sm">Ubah</a>
        <a href="index.php?halaman=hapusbanner&id=<?= $pecah['id_banner']; ?>" class="btn btn-danger btn-sm">Hapus</a>
      </td>
    </tr>

        <?php $no++; ?>
    <?php endwhile; ?>

  </tbody>
</table>

<div class="mb-4"><a href="index.php?halaman=tambahbanner" class="btn btn-primary">Tambah Data</a>

</div>
</div>






