<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "db_sekolah");

if(!isset($_SESSION['admin'])){
    // echo "<script>location='login.php';</script>";
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Text Editor -->
    <link href="assets/rich-text-editor-main/rich-text-editor.min.css" rel="stylesheet">
    
    <style>
    .rich-text-editor-active,
    .rich-text-editor-active span {
      background:#00f !important;
      color:#fff !important;
    }
    </style>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<?php include('include/sidebar.php'); ?>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
 <div id="content">

<!-- Navbar -->
<?php include('include/navbar.php'); ?>
<!-- End of Navbar -->

                <!-- MUALAIII -->
                <div class="container-fluid">


                    <!-- Content Row -->
                    <div class="row">
                <?php
                    if(isset($_GET["halaman"])){
                        if($_GET["halaman"] == "berita"){
                            include 'berita.php';
                        }
                        elseif($_GET["halaman"] == "tambahberita"){
                            include 'tambahberita.php';
                        }
                        elseif($_GET["halaman"] == "ubahberita"){
                            include 'ubahberita.php';
                        }
                        elseif($_GET["halaman"] == "hapusberita"){
                            include 'hapusberita.php';
                        }
                        elseif($_GET["halaman"] == "lihatberita"){
                            include 'lihatberita.php';
                        }
                        elseif($_GET["halaman"] == "banner"){
                            include 'banner.php';
                        }
                        elseif($_GET["halaman"] == "tambahbanner"){
                            include 'tambahbanner.php';
                        }
                        elseif($_GET["halaman"] == "ubahbanner"){
                            include 'ubahbanner.php';
                        }
                        elseif($_GET["halaman"] == "hapusbanner"){
                            include 'hapusbanner.php';
                        }
                        elseif($_GET["halaman"] == "fasilitas"){
                            include 'fasilitas.php';
                        }
                        elseif($_GET["halaman"] == "tambahfasilitas"){
                            include 'tambahfasilitas.php';
                        }
                        elseif($_GET["halaman"] == "ubahfasilitas"){
                            include 'ubahfasilitas.php';
                        }
                        elseif($_GET["halaman"] == "hapusfasilitas"){
                            include 'hapusfasilitas.php';
                        }
                        elseif($_GET["halaman"] == "ekstra"){
                            include 'ekstra.php';
                        }
                        elseif($_GET["halaman"] == "tambahekstra"){
                            include 'tambahekstra.php';
                        }
                        elseif($_GET["halaman"] == "ubahekstra"){
                            include 'ubahekstra.php';
                        }
                        elseif($_GET["halaman"] == "hapusekstra"){
                            include 'hapusekstra.php';
                        }
                        elseif($_GET["halaman"] == "prestasi"){
                            include 'prestasi.php';
                        }
                        elseif($_GET["halaman"] == "tambahprestasi"){
                            include 'tambahprestasi.php';
                        }
                        elseif($_GET["halaman"] == "ubahprestasi"){
                            include 'ubahprestasi.php';
                        }
                        elseif($_GET["halaman"] == "hapusprestasi"){
                            include 'hapusprestasi.php';
                        }
                        elseif($_GET["halaman"] == "staff"){
                            include 'staff.php';
                        }
                        elseif($_GET["halaman"] == "tambahstaff"){
                            include 'tambahstaff.php';
                        }
                        elseif($_GET["halaman"] == "ubahstaff"){
                            include 'ubahstaff.php';
                        }
                        elseif($_GET["halaman"] == "hapusstaff"){
                            include 'hapusstaff.php';
                        }
                        elseif($_GET["halaman"] == "profil"){
                            include 'profil.php';
                        }
                        elseif($_GET["halaman"] == "tambahprofil"){
                            include 'tambahprofil.php';
                        }
                        elseif($_GET["halaman"] == "ubahprofil"){
                            include 'ubahprofil.php';
                        }
                        elseif($_GET["halaman"] == "hapusprofil"){
                            include 'hapusprofil.php';
                        }
                        elseif($_GET["halaman"] == "lihatprofil"){
                            include 'lihatprofil.php';
                        }
                        elseif($_GET["halaman"] == "pesanpengunjung"){
                            include 'pesanpengunjung.php';
                        }
                        elseif($_GET["halaman"] == "lihatpesan"){
                            include 'lihatpesan.php';
                        }
                        elseif($_GET["halaman"] == "hapuspesan"){
                            include 'hapuspesan.php';
                        }
                        elseif($_GET["halaman"] == "logout"){
                            include 'logout.php';
                        }

                    }
                    else{
                        include 'home.php';
                    }
                ?> 

                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer 
                
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>

             End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

    <!-- Text editor -->
    <script src="assets/rich-text-editor-main/rich-text-editor.min.js"></script>
    <script>
    var editor = new RTE(document.querySelector('textarea')),

        font_sizes = [
            false, // inherit
            125,
            150
        ],
        font_sizes_count = font_sizes.length,
        font_sizes_i = 0,

        font_faces = [
            false, // inherit
            'times new roman,serif',
            'trebuchet ms,sans-serif',
            'courier new,courier,monospace'
        ],
        font_faces_count = font_faces.length,
        font_faces_i = 0;

    // font size
    editor.t('font', ['Font Size', 'svg:M2 8v-2h6v2h-2v4.656h-2v-4.656h-2zM6 2.656h8.656v2h-3.313v8h-2v-8h-3.344v-2z'], function() {
        var font = this.e('span') || this.w('span', 1); // force wrap
        ++font_sizes_i;
        if (font_sizes_i > font_sizes_count - 1) {
            font_sizes_i = 0;
        }
        if (font_sizes_i !== 0) {
            font.style.fontSize = font_sizes[font_sizes_i] + '%';
        } else {
            font.style.fontSize = "";
            if (!font.getAttribute('style')) {
                this.w('span', 0); // force unwrap
            }
        }
    }, -1);

    // font family
    editor.t('font', ['Font Family', 'svg:M10.625 12.344h1.406l-3.406-8.688h-1.25l-3.406 8.688h1.406l0.75-2h3.75zM13.344 1.344c0.719 0 1.313 0.594 1.313 1.313v10.688c0 0.719-0.594 1.313-1.313 1.313h-10.688c-0.719 0-1.313-0.594-1.313-1.313v-10.688c0-0.719 0.594-1.313 1.313-1.313h10.688zM6.625 9l1.375-3.688 1.375 3.688h-2.75z'], function() {
        var font = this.e('span') || this.w('span', 1); // force wrap
        ++font_faces_i;
        if (font_faces_i > font_faces_count - 1) {
            font_faces_i = 0;
        }
        if (font_faces_i !== 0) {
            font.style.fontFamily = font_faces[font_faces_i];
        } else {
            font.style.fontFamily = "";
            if (!font.getAttribute('style')) {
                this.w('span', 0); // force unwrap
            }
        }
    }, -1);

    </script>
</body>

</html>