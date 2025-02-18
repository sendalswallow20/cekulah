 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Berita</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Berita</h1><hr>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
		<th>Tanggal</th>
		<th>Gambar</th>
		<th>Judul</th>
		<th>Aksi</th>
		</tr> 
	</thead>
	<tbody>

		<?php $ambil = $koneksi->query("SELECT * FROM berita ORDER BY id_berita DESC") ?>
		<?php while($pecah = $ambil->fetch_assoc()): ?>
		<tr>
     		<td><?php $originalDate = $pecah['tanggal_berita'];
				$newDate = date("d/m/Y H:i", strtotime($originalDate)); ?>
				<?= $newDate; ?></td>
			<td class="col-md-3">
				<img src="../images/gambar_berita/<?= $pecah["gambar_berita"]; ?>" width="250">
			</td>
			<td class="col-md-5"><strong><a href="index.php?halaman=lihatberita&id=<?= $pecah['id_berita']; ?>"><?= $pecah["judul_berita"]; ?></a></strong></td>
			<td>
				<a href="index.php?halaman=lihatberita&id=<?= $pecah['id_berita']; ?>" class="btn btn-success btn-sm">Lihat</a> 
				<a href="index.php?halaman=ubahberita&id=<?= $pecah['id_berita']; ?>" class="btn btn-primary btn-sm">Ubah</a> 
				<a href="index.php?halaman=hapusberita&id=<?= $pecah['id_berita']; ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		<?php endwhile; ?>

	</tbody>
</table>

<div class="mb-4"><a href="index.php?halaman=tambahberita" class="btn btn-primary">Tambah Data Berita</a>
</div>
</div>