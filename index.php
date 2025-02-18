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

  <div class="clearfix"> </div>
  <!-- Slideshoww -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <?php $count = 0;
    $ambil = $koneksi->query("SELECT * FROM banner");
      while($perbanner = $ambil->fetch_assoc()): ?>
    <div class="item <?php if($count==0){ echo "active"; }
                            else{ echo " "; } ?>" data-interval="2000">
      <img width="100%" src="images/gambar_banner/<?= $perbanner['gambar']; ?>" alt="banner">
    </div>
    <?php  $count++; ?>
    <?php endwhile; ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- //Slideshoww -->

  <!-- Event -->
    <div class="container head">
      <h1 style="text-align: CENTER;"><strong>SAMBUTAN KEPALA SEKOLAH</strong></h1>
      <div class="row margin-atas" style="display: flex;">

      <!-- Mulai sambutan-->
        <?php
        $ambil = $koneksi->query("SELECT * FROM profil WHERE judul_profil='Sambutan Kepala Sekolah'");
        $perprofil = $ambil->fetch_assoc();
        ?>
        <div class="col-sm-4 col-md-4">
            <img width="100%" src="images/gambar_profil/<?= $perprofil['gambar_profil']; ?>" alt="<?= $perprofil['judul_profil']; ?>">
          </div>
          <div class="col-sm-8 col-md-8">
              <div style="text-align: justify;"><?= $perprofil['isi_profil1']; ?></div>
          </div>
      <!-- batas-->

      </div>
    </div>
    
  <div class="jumbotron">
    <div class="container">
      <h1 style="text-align: left;"><strong>PROFIL SDN 3 PURWOSARI</strong></h1>
      <div class="row margin-atas" style="display: flex; justify-content: center;">

      <!-- Mulai Profil?-->
        <?php
        $ambil = $koneksi->query("SELECT * FROM profil WHERE NOT judul_profil='Sambutan Kepala Sekolah' ORDER BY id_profil DESC");
        while($perprofil = $ambil->fetch_assoc()):
        ?>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <a href="detailprofil.php?id=<?= $perprofil['id_profil']; ?>">
            <img src="images/gambar_profil/<?= $perprofil['gambar_profil']; ?>" alt="<?= $perprofil['judul_profil']; ?>">

            <div class="caption">
              <h2 style="text-align: center;"><?= $perprofil['judul_profil']; ?></h2>
            </div></a>
          </div>
        </div>
      <?php endwhile; ?>
      <!-- Profil batas-->

      </div>
    </div>
  </div>

    <div class="container head">
      <h1><strong>BERITA SDN 3 PURWOSARI</strong></h1>
      <div class="row margin-atas">
      <!-- Mulai berita?-->
        <?php
        $ambil = $koneksi->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 4");
        while($perberita = $ambil->fetch_assoc()):

        $originalDate = $perberita['tanggal_berita'];
        $newDate = date("d/m/Y", strtotime($originalDate));
        ?>
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail">
            <a href="detailberita.php?id=<?= $perberita['id_berita']; ?>">
            <img src="images/gambar_berita/<?= $perberita['gambar_berita']; ?>" alt="<?= $perberita['judul_berita']; ?>">

            <div class="caption">
              <h4><?= $perberita['judul_berita']; ?></h4>
              <br><p style="text-align: right;"><?= $newDate; ?></p>
            </div></a>
          </div>
        </div>
      <?php endwhile; ?>
      <!-- berita batas-->
      </div>

      <div><a href="listberita.php"><p align="right"><i>view more ></i></p></a></div>
    </div>
  
  <!-- footer -->

<?php include ('footer.php'); ?>

<!-- //footer -->
</body>


</html>