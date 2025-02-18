<?php
session_start();

// Koneksi ke database
include 'koneksi.php';

// Mendapatkan id_produk dari url
$id_profil = $_GET['id'];

// Query ambil data
$ambil = $koneksi->query("SELECT * FROM profil WHERE id_profil='$id_profil'");
$detail = $ambil->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>SDN 3 PURWOSARI</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
  <link rel="stylesheet" href="css/roma.css">
  <link rel="stylesheet" href="css/utama.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
<style>

</style>
</head>
<body>

<?php include ('napigasi.php'); ?>

<!--- MULAI -->
				
			<div class="container head">

				<h1 style="text-align: center;"><?= $detail['judul_profil']; ?></h1><br>

				<div class="gallery-item" style="display: flex; justify-content: center;">
				<img width="350" src="images/gambar_profil/<?= $detail['gambar_profil']; ?>" alt="<?= $detail['judul_profil']; ?>">
				</div><br>
				<div class="isiteks" align="justify"><?= $detail['isi_profil1']; ?></div>
			
		</div>


<!-- footer -->

<?php include ('footer.php'); ?>

<!-- //footer -->
</body>

</html>