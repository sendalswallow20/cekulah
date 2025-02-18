<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>SDN 3 Purwosari</title>
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
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>

<?php include ('napigasi.php'); ?>

<div class="clearfix"> </div> 
<!-- contact -->
<div id="mail" class="contact">
	<div class="container">
		<h3 class="w3l-title">Mail Us</h3>	
			<div class="contact-grid1">
				<div class="contact-top1">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>Nama*</label>
							<input type="text" name="nama" placeholder="Nama" required="">
							<label>E-mail*</label>
							<input type="email" name="email" placeholder="E-mail" required="">
						</div>
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>Nomor Telepon*</label>
							<input type="text" name="telepon" placeholder="Nomor telepon" required="">
							<label>Subjek*</label>
							<input type="text" name="judul" placeholder="Subjek" required="">
						</div>
						<div class="form-group">
							<label>Pesan*</label>
							<textarea name="pesan" placeholder="Masukkan pesan anda..." required></textarea>
						</div>
							<input type="submit" name="submit">
					</form>
				</div>
			</div>
	</div>
</div>

<?php  
if(isset($_POST["submit"])){
  	$tanggal_pesan = date('Y-m-d');

	// menyimpan ke database
	$result = $koneksi->query("INSERT INTO pesan VALUES('', '$_POST[nama]', '$_POST[telepon]', '$_POST[email]', '$_POST[judul]', '$_POST[pesan]', '$tanggal_pesan')");

	if($result){
		echo "<script>alert('Pesan telah dikirim');window.location='pesan.php';</script>";
	}

}
?>

<!-- footer -->

<?php include ('footer.php'); ?>
<!-- //footer -->

</body>
</html>