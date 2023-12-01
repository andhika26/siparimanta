<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Formulir</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Formulir</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!--section class="inner-page">
      <div class="container">
        <p>
        
        </p>
      </div>
    </section-->

    <section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Hubungi Kami</h2>
      <p>Formulir Permohonan Magang</p>
    </div>

    <div class="row">

      <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group mt-3">
              <label for="name">Nama Mahasiswa / Pemohon</label>
              <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Siswa" required>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Program Studi / Jurusan</label>
              <input type="text" class="form-control" name="Program Studi / Jurusan" id="Program Studi / Jurusan" placeholder="Nama Jurusan" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <label for="name">Asal Pendidikan / Asal Sekolah</label>
              <input type="text" class="form-control" name="Asal Pendidikan / Asal Sekolah" id="Asal Pendidikan / Asal Sekolah" placeholder="Nama Sekolah" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="name">Kontak Whatsapp</label>
            <input type="text" class="form-control" name="Kontak Whatsapp" id="Kontak Whatsapp" placeholder="No.tlp" required>
          </div>
          <div class="form-group mt-3">
            <label for="name">Jenis Kelamin</label>
            <div class="row">
                    <div class="form-group col-md-8">
                      <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline">
                            <input type="radio" name="kat" id="option_a2" autocomplete="off" value="Laki-laki" class="form-control"><i class="fas fa-user"></i> Laki-laki
                            </label>
                            <label class="btn btn-outline">
                            <input type="radio" name="kat" id="option_a3" autocomplete="off" value="Perempuan" class="form-control"> <i class="fas fa-user"></i> Perempuan
                            </label>
                            </div>           
</div>
</div>
         <div class="form-group mt-3">
            <label for="name">Lokasi</label>
                        <select name="proses" class="form-control select2bs4">
  									<option>(PILIH SALAH SATU)</option>
										<option value="Melalui UPT PPP BULU">UPT PPP BULU</option>
										<option value="Melalui IPPP BAWEAN">IPPP BAWEAN</option>
										<option value="Melalui IPPP CAMPUREJO">IPPP CAMPUREJO</option>
									</select>
                    </div>  

          <div class="form-group mt-3">
            <label for="name">Judul Proposal PKL/Tugas Akhir (jika sudah ada)</label>
            <textarea class="form-control" name="Judul Proposal PKL/Tugas Akhir (jika sudah ada)" rows="8" placeholder="Tuliskan kegiatan" required></textarea>
          </div>
          <div class="form-group mt-3">
            <label for="name">Tanggal Mulai</label>
            <input type="date" name="Tanggal" class="form-control" id="Tanggal" placeholder="22/11/2023" required>   
          </div>
          <div class="form-group mt-3">
            <label for="name">Tanggal Selesai</label>
            <input type="date" name="Tanggal" class="form-control" id="Tanggal" placeholder="22/11/2023" required>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>
          </div>
          <div class="text-center"><button type="submit">Kirim</button></div>
        </form>
      </div>

    </div>

  </div>
</section ><!-- End Contact Us Section -->
</main><!-- End #main -->