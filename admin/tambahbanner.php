 <!-- Begin Page Content -->
<head><title>Admin SDN 3 Purwosari - Tambah Banner</title></head>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Banner</h1>
    <p class="mb-4">*ukuran gambar 2:1.</p>

<!-- Data -->
<div class="card shadow mb-4">
	<div class="card-header">Upload gambar</div>
<div class="card-body">
	<div>
		<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
						<input type="file" name="gambar" class="form-control">
				</div><br>
			<button name="submit" class="btn btn-primary">Simpan</button>
			<a href="index.php?halaman=banner" class="btn btn-secondary">Kembali</a>
		</form>
	</div>

</div>
</div>
</div>

<?php  
if(isset($_POST["submit"])){
	
	$namagambar = $_FILES["gambar"]["name"];
	$lokasigambar = $_FILES["gambar"]["tmp_name"];
	move_uploaded_file($lokasigambar, "../images/gambar_banner/".$namagambar);

	// menyimpan ke database
	$result = $koneksi->query("INSERT INTO banner VALUES('', '$namagambar')");

	if($result){
		echo "<script>alert('Data berhasil ditambahkan');window.location='index.php?halaman=banner';</script>";
	}
}
?>