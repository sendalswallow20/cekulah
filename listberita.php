<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>SDN 3 PURWOSARI</title>
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
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
</head>

<body>

  <!-- NAVBAR E IKI -->
  <?php include('napigasi.php'); ?>
  <!-- NAVBAR -->

  <!-- Event -->
  <div class="jumbotron">


    <div class="container"><br>
      <h1>BERITA SDN 3 PURWOSARI</h1>
      <div class="row margin-atas">
      <!-- Mulai berita?-->

        <div class="thumbnail"><br>
        <?php
        $ambil = $koneksi->query("SELECT * FROM berita ORDER BY id_berita DESC");
        while($perberita = $ambil->fetch_assoc()):

        $originalDate = $perberita['tanggal_berita'];
        $newDate = date("d/m/Y", strtotime($originalDate));

        ?>
        <div class="row">
            <div class="col-sm-2 col-md-2">
            <a href="detailberita.php?id=<?= $perberita['id_berita']; ?>">
            <img width="70%" src="images/gambar_berita/<?= $perberita['gambar_berita']; ?>" alt="<?= $perberita['judul_berita']; ?>">
            </div>

            <div class="caption"><br>
              <h3><?= $perberita['judul_berita']; ?></h3>
            </div></a>
            <div class="date">
            <p><small><?= $newDate ?></small></p>
            </div>

        </div>
        <hr width="95%">
      <?php endwhile; ?>
      <!-- Profil batas-->

        </div>

      </div>
    </div>


  </div>
  
  <!-- footer -->

<?php include ('footer.php'); ?>

<!-- //footer -->
</body>


</html>