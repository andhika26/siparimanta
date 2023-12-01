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
      <p>Formulir Informasi Data Magang</p>
    </div>
    
    <div class="row">

      <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group mt-3">
              <label for="name">Tanggal</label>
              <input type="date" name="Tanggal" class="form-control" id="Tanggal" placeholder="22/11/2023" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="name">Nama Lengkap Pemohon</label>
            <input type="text" class="form-control" name="Nama Lengkap Pemohon" id="Nama Lengkap Pemohon" placeholder="Nama Lengkap" required>
          </div>
          <div class="form-group mt-3">
            <label for="name">ID Permohonan (KTP/SIM/PASPOR)</label>
            <input type="text" class="form-control" name="ID Permohonan (KTP/SIM/PASPOR)" id="ID Permohonan (KTP/SIM/PASPOR)" placeholder="ID Permohonan (Jika tamu diluar dinas)" required>
          </div>
          <div class="form-group mt-3">
            <label for="name">Jenis Permohonan</label>
            <div class="row">
                    <div class="form-group col-md-8">
                      <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline">
                            <input type="radio" name="kat" id="option_a2" autocomplete="off" value="Organisasi" class="form-control"><i class="fas fa-home"></i> Organisasi
                            </label>
                            <label class="btn btn-outline">
                            <input type="radio" name="kat" id="option_a3" autocomplete="off" value="Perorangan" class="form-control"> <i class="fas fa-user"></i> Perorangan
                            </label>
                            </div>           
</div>
</div>
          <div class="form-group mt-3">
            <label for="name">Alamat Instansi</label>
            <input type="text" class="form-control" name="Alamat Instansi" id="Alamat Instansi" placeholder="Nama Organisasi/Peroranggan berikan tanda(-)" required>
          </div>
          <div class="form-group mt-3">
            <label for="name">Alamat Pemohon</label>
            <input type="text" class="form-control" name="Alamat Pemohon" id="Alamat Pemohon" placeholder="Alamat Wajib diIsi" required>
          </div>
          <div class="form-group mt-3">
            <label for="name">Kontak Whatsapp</label>
            <input type="text" class="form-control" name="Kontak Whatsapp" id="Kontak Whatsapp" placeholder="Nomor yang bisa dihubungi jika ada. Wajib diisi" required>
          </div>
          <div class="form-group mt-3">
            <label for="name">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email yang bisa dihubungi. wajib diisi" required> 
          </div>
          <div class="form-group mt-3">
            <label for="name">Rincian Informasi yang Dibutuhkan</label>
            <textarea class="form-control" name="Rincian Informasi yang Dibutuhkan" rows="8" placeholder="Tuliskan keperluan informasi.." required></textarea>
          </div>
          <div class="form-group mt-3">
            <label for="name">Tujuan Informasi yang Dibutuhkan</label>
            <textarea class="form-control" name="Tujuan Informasi yang Dibutuhkan" rows="8" placeholder="Tuliskan tujuan informasi.." required></textarea>
          </div>
          <div class="form-group mt-3">
            <label for="name">Cara Memperoleh Informasi</label>
            <div class="row">
                    <div class="form-group col-md-8">
                      <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline">
                            <input type="radio" name="kat" id="option_a2" autocomplete="off" value="Wawancara" class="form-control"><i class="fas fa-home"></i> Wawancara
                            </label>
                            <label class="btn btn-outline">
                            <input type="radio" name="kat" id="option_a3" autocomplete="off" value="Salinan Data" class="form-control"> <i class="fas fa-user"></i> Salinan Data
                            </label>
                            </div>           
</div>
</div>
          <div class="form-group mt-3">
            <label for="name">Bentuk Informasi</label>
            <div class="row">
                    <div class="form-group col-md-8">
                      <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline">
                            <input type="radio" name="kat" id="option_a2" autocomplete="off" value="Hardcopy" class="form-control"><i class="fas fa-home"></i> Hardcopy
                            </label>
                            <label class="btn btn-outline">
                            <input type="radio" name="kat" id="option_a3" autocomplete="off" value="Softcopy" class="form-control"> <i class="fas fa-user"></i> Softcopy
                            </label>
                            </div>           
</div>
</div>
          <div class="form-group mt-3">
            <label for="name">Cara Mendapatkan Salinan Informasi/Data</label>
                        <select name="proses" class="form-control select2bs4">
  									<option>(PILIH SALAH SATU)</option>
										<option value="Mengambil Langsung di Lokasi">Mengambil Langsung/di Lokasi</option>
										<option value="Melalui Whatsapp">Whatsapp</option>
										<option value="Melalui Paket Pos atau Kurir">Kurir/Paket Pos</option>
										<option value="Melalui Email">Email</option>
									</select>
                    </div>  
          </div>
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