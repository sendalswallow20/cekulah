 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Tambah Profil</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Profil</h1>
    <p class="mb-4"></p>

<!-- Data -->
<div class="card shadow mb-4">
  <div class="card-header">Tambah data profil</div>
<div class="card-body">
  <div>
    <!-- Form Mulai -->
		<form action="" method="post" enctype="multipart/form-data">

				<div class="form-group">
					<label>Gambar</label>
					<input type="file" name="gambar" class="form-control">
				</div>

				<div class="form-group">
					<label>Judul</label>
					<input type="text" name="judul" class="form-control">
				</div>

				<div class="form-group">
					<label>Isi</label>
					<textarea type="text" name="isi1" class="form-control" rows="5"></textarea>
				</div>

			<button name="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
</div>
</div>

<?php  
if(isset($_POST["submit"])){
  $tanggal_profil = date('Y-m-d');
	$namagambar = $_FILES["gambar"]["name"];
	$lokasigambar = $_FILES["gambar"]["tmp_name"];
	move_uploaded_file($lokasigambar, "../images/gambar_profil/".$namagambar);

	// menyimpan ke database
	$result = $koneksi->query("INSERT INTO profil VALUES('', '$_POST[judul]', '$_POST[isi1]', '$namagambar', '$tanggal_profil')");

	if($result){
		echo "<script>alert('Data berhasil ditambahkan');window.location='index.php?halaman=profil';</script>";
	}

}
?>





















 