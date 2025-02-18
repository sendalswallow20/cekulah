 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Fasilitas</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Fasilitas</h1><hr>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
		<th>No.</th>
		<th>Foto</th>
		<th>Nama fasilitas</th>
		<th>Aksi</th>
		</tr> 
	</thead>
	<tbody>

		<?php $no=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM fasilitas") ?>
		<?php while($pecah = $ambil->fetch_assoc()): ?>
		<tr>
     		<td><?= $no; ?></td>
			<td class="col-md-5">
				<img src="../images/gambar_fasilitas/<?= $pecah["gambar_fasilitas"]; ?>" width="400">
			</td>
			<td class="col-md-4"><strong><?= $pecah["nama_fasilitas"]; ?></strong></td>
			<td>
				<a href="index.php?halaman=ubahfasilitas&id=<?= $pecah['id_fasilitas']; ?>" class="btn btn-primary btn-sm">Ubah</a> 
				<a href="index.php?halaman=hapusfasilitas&id=<?= $pecah['id_fasilitas']; ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		<?php $no++; ?>
		<?php endwhile; ?>

	</tbody>
</table>

<div class="mb-4"><a href="index.php?halaman=tambahfasilitas" class="btn btn-primary">Tambah Data fasilitas</a></div>
</div>