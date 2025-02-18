<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
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
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->

<style>
.container5 {
	max-width : 1200px;
	margin : auto ;
	background : #fff;
	overflow : auto;
}
.gallery {
margin : 5px;
margin-top : 30px;
margin-bottom : 30px;
border : 1px solid #ccc;
float : left;
width : 390px;
}
.gallery img {
width : 100%;
height : 200px;
}

.desc h3 {
padding : 15px;
text-align : center ;
}

.judul h2 {
margin-top : 20px;
}
.warna-teks {
margin-left:5px;
color : #000000;
}

</style>

</head>
<body>

<?php include ('napigasi.php'); ?> 


<div class = "container5">
<div class ="judul">
<center><h2>FASILITAS</h2></center>
</div>
		
		<?php
        $ambil = $koneksi->query("SELECT * FROM fasilitas");
        while($perfas = $ambil->fetch_assoc()):
        ?>

		<div class="gallery">
		<img src="images/gambar_fasilitas/<?= $perfas['gambar_fasilitas']; ?>"  >
		<div class ="desc">
				<h3><?= $perfas['nama_fasilitas']; ?></h3>
			</div>
		</div>

      <?php endwhile; ?>
		
</div>




  <!-- footer -->

<?php include ('footer.php'); ?>

<!-- //footer -->
</body>
</html>
