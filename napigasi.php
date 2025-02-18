<!-- banner -->
<div class="main_section_agile" id="home">
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<h1><a class="navbar-brand" href="index.php"><i class="fa fa-leanpub" aria-hidden="true"></i> SDN 3 Purwosari</a></h1>

			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="effect-3">Beranda</a></li>

						<li><a class='effect-3 scroll' data-toggle='dropdown'>Tentang Sekolah<span class='caret'></span> </a>
							<ul class='dropdown-menu'>
				<?php
        		$ambil = $koneksi->query("SELECT * FROM profil ORDER BY id_profil DESC");
        		while($perprofil = $ambil->fetch_assoc()):
        		?>
								<li><a href='detailprofil.php?id=<?= $perprofil['id_profil']; ?>'><?= $perprofil['judul_profil']; ?></a></li>

      			<?php endwhile; ?>

      							<li><a href=''>Guru dan Staff</a></li>
      							<li><a href="fasilitas.php">Fasilitas </a></li>
								<li><a href="ekstra.php">Ekstrakulikululer </a></li>
								<li><a href="prestasi.php">Prestasi </a></li>
							</ul>
						</li>


						<li><a href="listberita.php" class="effect-3">Berita </a></li>
						<li><a href="pesan.php" class="effect-3">Contact</a></li>
					</ul>
				</nav>
			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>
