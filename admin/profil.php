 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Profil</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Profil</h1><hr>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
		<th>No.</th>
		<th>Gambar</th>
		<th>Judul</th>
		<th>Aksi</th>
		</tr> 
	</thead>
	<tbody>

		<?php $no=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM profil ORDER BY id_profil DESC") ?>
		<?php while($pecah = $ambil->fetch_assoc()): ?>
		<tr>
     		<td><?= $no; ?></td>
			<td class="col-md-3">
				<img src="../images/gambar_profil/<?= $pecah["gambar_profil"]; ?>" width="100">
			</td>
			<td class="col-md-6"><strong><a href="index.php?halaman=lihatprofil&id=<?= $pecah['id_profil']; ?>"><?= $pecah["judul_profil"]; ?></a></strong></td>
			<td>
				<a href="index.php?halaman=lihatprofil&id=<?= $pecah['id_profil']; ?>" class="btn btn-success btn-sm">Lihat</a> 
				<a href="index.php?halaman=ubahprofil&id=<?= $pecah['id_profil']; ?>" class="btn btn-primary btn-sm">Ubah</a> 
				<a href="index.php?halaman=hapusprofil&id=<?= $pecah['id_profil']; ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		<?php $no++; ?>
		<?php endwhile; ?>

	</tbody>
</table>

<div class="mb-4"><a href="index.php?halaman=tambahprofil" class="btn btn-primary">Tambah Data Profil</a>
</div>
</div>