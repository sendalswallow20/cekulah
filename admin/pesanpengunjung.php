 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Pesan Pengunjung</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Pesan Pengunjung</h1><hr>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
		<th>Tanggal</th>
		<th>Nama</th>
		<th>Email / No.Telp</th>
		<th>Judul</th>
		<th>Aksi</th>
		</tr> 
	</thead>
	<tbody>
		<?php $ambil = $koneksi->query("SELECT * FROM pesan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()): ?>
		<tr>
     		<td><?php $originalDate = $pecah['tanggal_pesan'];
				$newDate = date("d-m-Y", strtotime($originalDate)); ?>
				<?= $newDate; ?></td>
			<td class="col-md-3">
				<?= $pecah['nama']; ?>
			</td>

			<td class="col-md-3">
				<?= $pecah['email']; ?><br>
				<?= $pecah['telepon']; ?>
			</td>

			<td class="col-md-3"><strong><a href="index.php?halaman=lihatpesan&id=<?= $pecah['id_pesan']; ?>"><?= $pecah["judul"]; ?></a></strong>
			</td>
			<td>
				<a href="index.php?halaman=lihatpesan&id=<?= $pecah['id_pesan']; ?>" class="btn btn-success btn-sm">Lihat</a>
				<a href="index.php?halaman=hapuspesan&id=<?= $pecah['id_pesan']; ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		<?php endwhile; ?>

	</tbody>
</table>
</div>
</div>