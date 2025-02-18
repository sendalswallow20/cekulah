 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Tambah ekstra</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah ekstra</h1>
    <p class="mb-4"></p>

<!-- Data -->
<div class="card shadow mb-4">
  <div class="card-header">Tambah data ekstra</div>
<div class="card-body">
  <div>
    <!-- Form Mulai -->
		<form action="" method="post" enctype="multipart/form-data">

				<div class="form-group">
					<label>Gambar</label>
					<input type="file" name="gambar" class="form-control">
				</div>

				<div class="form-group">
					<label>Nama ekstra</label>
					<input type="text" name="namaeks" class="form-control">
				</div>

			<button name="submit" class="btn btn-primary">Simpan</button>
			<a href="index.php?halaman=ekstra" class="btn btn-secondary">Batal</a> 
		</form>
	</div>
</div>
</div>

<?php  
if(isset($_POST["submit"])){
	$namagambar = $_FILES["gambar"]["name"];
	$lokasigambar = $_FILES["gambar"]["tmp_name"];
	move_uploaded_file($lokasigambar, "../images/gambar_ekstra/".$namagambar);

	// menyimpan ke database
	$result = $koneksi->query("INSERT INTO ekstra VALUES('', '$namagambar', '$_POST[namaeks]')");

	if($result){
		echo "<script>alert('Data berhasil ditambahkan');window.location='index.php?halaman=ekstra';</script>";
	}

}
?>





















 