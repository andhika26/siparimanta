<?php
	  
      //Konfigurasi zona waktu WIB								
	  date_default_timezone_set("Asia/jakarta");
      //ambil tahun sekarang dari sistem
	  $tahun = date("Y");
      //sikronisasi koneksi ke server
	  include ("koneksi-server.php");

	  $queryp = mysqli_query($koneksi, "SELECT COUNT(*) FROM magang WHERE status='Permohonan'") or die (mysqli_error());
	  $permohonan = mysqli_fetch_array($queryp);

	  $aktif1 = mysqli_query($koneksi, "SELECT COUNT(*) FROM magang WHERE status='Aktif'") or die (mysqli_error());
	  $aktif00  = mysqli_fetch_array($aktif1);

	  $selesai1 = mysqli_query($koneksi, "SELECT COUNT(*) FROM magang WHERE status='Selesai'") or die (mysqli_error());
	  $selesai  = mysqli_fetch_array($selesai1);

	  $totalpkl = mysqli_query($koneksi, "SELECT COUNT(*) FROM magang") or die (mysqli_error());
	  $jumpkl  = mysqli_fetch_array($totalpkl);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIPARIMANTA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="https://perahulayarkertas.com/UX/LTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://perahulayarkertas.com/UX/LTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://perahulayarkertas.com/UX/LTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://perahulayarkertas.com/UX/LTE/dist/css/adminlte.min.css">
    
  <!-- =======================================================
  * Template Name: Ninestars
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span><div class="swiper-slide"><img src="assets/img/UPT_PPP_Bulu2.png" class="img-fluid" alt=""></div></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="./">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Info Grafis </a></li>
          <li><a class="nav-link scrollto" href="#services">Magang</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#video">Video</a></li>
          <li><a class="nav-link scrollto" href="#team">Mentor</a></li>
          <li class="dropdown"><a href="#"><span>Formulir</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="?page=form-magang">Formulir Magang</a></li>
              <li><a href="?page=form-informasi">Formulir Informasi</a></li>
          </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <?php include("route.php"); ?>
  

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-contact">
            <h3><div class="small"><img src="assets/img/jbu5q02v.png" class="img-fluid" alt=""></div></h3>
            <p align="right">
            Jalan Raya Tuban-Semarang Km.45 Desa Bulumeduro, Bancar, Tuban <br>
              
              
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link Terkait</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Website Resmi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">E-KLIK</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">SIMPELPAS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">MASDANIS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">SILAYUR MANTAP</a></li>
            </ul>
          </div>

          <!--div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div--->

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Jaringan Sosial</h4>
            <p>Halaman ini dikhususkan sebagai sarana Pedukung Zona Integritas dengan Tagline Melayani Dengan PROAKTIF.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <br>
            <strong>Telepon:</strong>0356-411024 <br>
            <strong>Email:</strong>satgaszipppbulu@gmail.co <br>
          </div>
         
        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        <strong><span></span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">Bubuy</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- jQuery -->
<script src="https://perahulayarkertas.com/UX/LTE/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://perahulayarkertas.com/UX/LTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://perahulayarkertas.com/UX/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="https://perahulayarkertas.com/UX/LTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="https://perahulayarkertas.com/UX/LTE/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="https://perahulayarkertas.com/UX/LTE/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="https://perahulayarkertas.com/UX/LTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="https://perahulayarkertas.com/UX/LTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="https://perahulayarkertas.com/UX/LTE/plugins/moment/moment.min.js"></script>
<script src="https://perahulayarkertas.com/UX/LTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="https://perahulayarkertas.com/UX/LTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="https://perahulayarkertas.com/UX/LTE/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="https://perahulayarkertas.com/UX/LTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="https://perahulayarkertas.com/UX/LTE/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://perahulayarkertas.com/UX/LTE/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://perahulayarkertas.com/UX/LTE/dist/js/pages/dashboard.js"></script>

<!-- DataTables -->
  <link rel="stylesheet" href="https://perahulayarkertas.com/UX/LTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://perahulayarkertas.com/UX/LTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<!-- DataTables -->
<script src="https://perahulayarkertas.com/UX/LTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="https://perahulayarkertas.com/UX/LTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://perahulayarkertas.com/UX/LTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="https://perahulayarkertas.com/UX/LTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- bs-custom-file-input -->
<script src="https://perahulayarkertas.com/UX/LTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

</body>

</html>