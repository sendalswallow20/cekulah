 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Ekstrakulukuler</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Ekstrakulukuler</h1><hr>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
		<th>No.</th>
		<th>Foto</th>
		<th>Nama Ekstrakulukuler</th>
		<th>Aksi</th>
		</tr> 
	</thead>
	<tbody>

		<?php $no=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM ekstra") ?>
		<?php while($pecah = $ambil->fetch_assoc()): ?>
		<tr>
     		<td><?= $no; ?></td>
			<td class="col-md-5">
				<img src="../images/gambar_ekstra/<?= $pecah["gambar_ekstra"]; ?>" width="400">
			</td>
			<td class="col-md-4"><?= $pecah["nama_ekstra"]; ?></td>
			<td>
				<a href="index.php?halaman=ubahekstra&id=<?= $pecah['id_ekstra']; ?>" class="btn btn-primary btn-sm">Ubah</a> 
				<a href="index.php?halaman=hapusekstra&id=<?= $pecah['id_ekstra']; ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		<?php $no++; ?>
		<?php endwhile; ?>

	</tbody>
</table>

<div class="mb-4"><a href="index.php?halaman=tambahekstra" class="btn btn-primary">Tambah Data ekstra</a></div>
</div>