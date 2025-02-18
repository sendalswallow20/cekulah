 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Prestasi</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Prestasi</h1><hr>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
		<th>No.</th>
		<th>Foto</th>
		<th>Nama Prestasi</th>
		<th>Aksi</th>
		</tr> 
	</thead>
	<tbody>

		<?php $no=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM prestasi") ?>
		<?php while($pecah = $ambil->fetch_assoc()): ?>
		<tr>
     		<td><?= $no; ?></td>
			<td class="col-md-5">
				<img src="../images/gambar_prestasi/<?= $pecah["gambar_prestasi"]; ?>" width="400">
			</td>
			<td class="col-md-4"><?= $pecah["nama_prestasi"]; ?></td>
			<td>
				<a href="index.php?halaman=ubahprestasi&id=<?= $pecah['id_prestasi']; ?>" class="btn btn-primary btn-sm">Ubah</a> 
				<a href="index.php?halaman=hapusprestasi&id=<?= $pecah['id_prestasi']; ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		<?php $no++; ?>
		<?php endwhile; ?>

	</tbody>
</table>

<div class="mb-4"><a href="index.php?halaman=tambahprestasi" class="btn btn-primary">Tambah Data prestasi</a></div>
</div>