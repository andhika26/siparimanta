<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1>SI PARI MANTA</h1>
      <h2>SI PARI MANTA (Sistem Informasi Permohonan Izin dan Permintaan Data).
         Tujuan dari aplikasi yaitu untuk mempermudah dalam proses permohonan data 
         magang serta permintaan data yang terintegrasi dengan whatsapp.</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Mulai</a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img">
      <img src="assets/img/foto1.jpeg" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero --> 

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row justify-content-between">
      <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
        <img src="assets/img/Ilustrasi4.jpg" class="img-fluid" alt="" data-aos="zoom-in">
      </div>
      <div class="col-lg-6 pt-5 pt-lg-0">
        <h3 data-aos="fade-up">Info Grafis Pemohon Magang dan Penelitian</h3>
        <p data-aos="fade-up" data-aos-delay="100">
        </p>
        <div class="row">
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
          <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
          <i class="bx bx-user color: #3399FF;"></i>
            <p><?php echo $permohonan["0"]; ?> Orang</p>
            <h4>Permohonan</h4>
          </div>
          <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
          <i class="bx bx-user"></i>
            <p><?php echo $aktif00["0"]; ?> Orang</p>
            <h4>Aktif</h4>
          </div>
          <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
          <i class="bx bx-user"></i>
            <p><?php echo $selesai["0"]; ?> Orang</p>
            <h4>Selesi</h4>
          </div>
          <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
          <i class="bx bx-user"></i>
            <p><?php echo $jumpkl["0"]; ?> Orang</p>
            <h4>Total</h4>  
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Permohonan Magang</h2>
      <p>Syarat Permohonan Magang</p>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href="">Surat Permohonan</a></h4>
          <p class="description">Surat permohonan/pengantar dari Kampus Untuk Dinas Kelautan, Perikanan Jawa Timur, dan UPT Pelabuhan Perikanan Pantai Bulu</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href="">Surat Pernyataan</a></h4>
          <p class="description">Surat Pernyataan Mahasiswa dilampirkan Kartu Tanda Mahasiswa Aktif (Jika Tidak ada Pengantar Kampus)</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href="">Proposal</a></h4>
          <p class="description">Surat Permohonan Studi Lapangan/Penilitian Sesuai Judul Tugas Akhir / Skripsi dan Proposal Kegiatan Magang</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href="">Formulir</a></h4>
          <p class="description">Mengisi formulir secara  online</p>

        </div>
      </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2></h2>
      <p>Permintaan Data</p>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href="">Surat Permohonan</a></h4>
          <p class="description">Surat permohonan dari  intansi/kampus</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href="">Formulir</a></h4>
          <p class="description">Mengisi formulir magang</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Services Section -->


<!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check out our beautifull portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php
              
date_default_timezone_set("Asia/jakarta");
$tahun = date("Y");
$bln = date("m");
$now = date("d-m-Y");
//sikronisasi koneksi ke server
include ("koneksi-server.php");

$querygm1 = mysqli_query($koneksi, "SELECT kategori FROM galeri_magang ORDER BY id DESC LIMIT 0,9") or die (mysqli_error());
if(mysqli_num_rows($querygm1) == 0){
echo "<b>data yg di uplod</b>";
}else{
while($gm1 = mysqli_fetch_array($querygm1)):  
            
?>    
              <li data-filter=".filter-<?php echo $gm1['0'] ?>"><?php echo $gm1['0'] ?></li>

              <?php
        endwhile;
        }	
    ?> 
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php
              
date_default_timezone_set("Asia/jakarta");
$tahun = date("Y");
$bln = date("m");
$now = date("d-m-Y");
//sikronisasi koneksi ke server
include ("koneksi-server.php");

$querygm = mysqli_query($koneksi, "SELECT * FROM galeri_magang ORDER BY id DESC LIMIT 0,9") or die (mysqli_error());
if(mysqli_num_rows($querygm) == 0){
echo "<b>data yg di uplod</b>";
}else{
while($gm = mysqli_fetch_array($querygm)):  
            
?>    

          <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $gm['kategori'] ?>">
            <div class="portfolio-wrap">
              <img src="https://pppbulu.dkp.jatimprov.go.id/esurat/galerispm/<?php echo $gm['foto'] ?>" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="https://pppbulu.dkp.jatimprov.go.id/esurat/galerispm2023/<?php echo $gm['foto'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                <a href="./?page=details&&key=<?php echo $gm['id'] ?>" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4><?php echo $gm['deskripsi'] ?></h4>
                <p><?php echo $gm['kategori'] ?></p>
              </div>
            </div>
          </div>

 <?php
        endwhile;
        }	
    ?> 

         

        </div>

      </div>
    </section><!-- End Portfolio Section -->


<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>F.A.Q</h2>
      <p>Pertanyaan Umum</p>
    </div>

    <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

      <li>
        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Siapa saja yang bisa magang / PKL / Penelitian di UPT Pelabuhan Perikanan Pantai Bulu? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
          <p>
          Semua Siswa/Siswi SMK dan Mahasiswa/i dari PTN maupun PTS
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Bagaimana Cara Permohonan untuk magang atau penelitian? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
          <p>
          Permohon cukup mengisi formulir permohonan data online pada menu [Formulir Online] pilih sesuai permohonan,
           dengan mengunggah file dokumen pengantar dari Sekolah/Universitas
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Apa saja jurusan yang bisa magang atau penelitian di UPT Pelabuhan Perikanan Pantai Bulu? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
          <p>
          UPT Pelabuhan Perikanan Pantai Bulu menerima peserta magang semua Jurusan dari SMK/SMA dan Universitas
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Berapa lama jangka waktu magang di UPT Pelabuhan Perikanan Pantai Bulu? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
          <p>
          Jangka Waktu sesuai surat pengantar dan kesepakatan dari peserta magang
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Apa saja yang dapat diperoleh dari hasil magang atau praktek kerja? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
          <p>
          Kami memberikan pengalaman dalam 3 kategori, Kemampuan Teoritis, Kemampuan Publik Speaking dan Kedisiplinan sesuai tagline PROAKTIF 
          (Profesional, Akuntabel, Transparan, Integritas dan Inovatif)
          </p>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Apakah setelah Magang, Praktek Kerja dan Penelitian dapat sertifikat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
          <p>
          mendapatkan Sertifikat dari UPT Pelabuhan Perikanan Pantai Bulu dan Dinas Kelautan dan Perikanan Jawa Timur
          </p>
        </div>
      </li>

    </ul>

  </div>
</section><!-- End F.A.Q Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Mentor</h2>
      <p>Tim kami yang membantu</p>
    </div>

    <div class="row">

    <?php
									
	date_default_timezone_set("Asia/jakarta");
	$tahun = date("Y");
	$bln = date("m");
	$now = date("d-m-Y");
	//sikronisasi koneksi ke server
    include ("koneksi-server.php");
	  
	  $queryrm = mysqli_query($koneksi, "SELECT * FROM mentor_magang ORDER BY id DESC LIMIT 0,15") or die (mysqli_error());
	  if(mysqli_num_rows($queryrm) == 0){
	  echo "<b>data</b>";
	  }else{
	  while($rm = mysqli_fetch_array($queryrm)):  
                
	  ?>    
	  
	  //Link Gambar : https://pppbulu.dkp.jatimprov.go.id/esurat/app/galerispm2023/tinggigelombang.svg
	  
    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="member">
          <img src="https://pppbulu.dkp.jatimprov.go.id/esurat/app/galerispm2023/<?php echo $rm['foto']; ?>" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
       
<?php
  endwhile;
  }	
?>
     

      
    </div>

  </div>
</section><!-- End Team Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Clients</h2>
      <p>Kerjasama</p>
    </div>

    <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="assets/img/SMKN_tambakboyo.jpeg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/SMKN_Jatirogo.jpeg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/SMK_hasan_jufri_bawean.jpeg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/UNIROW.jpeg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/UNDIP.jpeg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/UIN_Sunan_Kalijaga.jpeg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/UIN_Sunan_Ampel.jpeg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/politeknik_malang.jpeg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/UNIVERSITAS_brawijaya.jpeg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/UNIVERSITAS_hang-tuah.jpeg" class="img-fluid" alt=""></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Clients Section -->


<!-- ======= Contact Us Section ======= -->
<!-- section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact Us</h2>
      <p>Contact us the get started</p>
    </div>

    <div class="row">

      <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@example.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+1 5589 55488 55s</p>
          </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>

      </div>

      <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section --><!-- End Contact Us Section -->
</main><!-- End #main -->