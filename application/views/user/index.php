  <div class="berhasil" data-berhasil="<?= $this->session->flashdata('berhasil') ?>"></div>
  <div class="gagal" data-gagal="<?= $this->session->flashdata('gagal') ?>"></div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
      <div class="container-fluid">

          <div class="row justify-content-center">
              <div class="col-xl-9 d-flex align-items-center">
                  <!-- <h1 class="logo mr-auto"><a href="<?= base_url() ?>">Rumah Inovasi Karyasa</a></h1>
                  Uncomment below if you prefer to use an image logo -->
                  <a href="<?= base_url() ?>" class="logo mr-auto"><img
                          src="<?= base_url() ?>assets/img/website_icon.png" alt="" class="img-fluid"></a>

                  <nav class="nav-menu d-none d-lg-block">
                      <ul>
                          <li class="active"><a href="<?= base_url() ?>">Beranda</a></li>
                          <li><a href="#about">Tentang Kami</a></li>
                          <li><a href="#services">Daftar Pameran</a></li>
                          <li><a href="#portfolio">Galeri</a></li>
                          <li><a href="#contact">Hubungi Kami</a></li>

                      </ul>
                  </nav><!-- .nav-menu -->

              </div>
          </div>

      </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

      <div class="container-fluid" data-aos="fade-up">
          <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                  <h1>Berkarya dan Berinovasi Melalui Seni</h1>
                  <h2>Pandemi Bukanlah Sebuah Halangan Untuk Mencurahkan Buah Pikiran</h2>
                  <div><a href="#about" class="btn-get-started scrollto">Berkeliling</a></div>
              </div>
              <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                  <img src="<?= base_url() ?>assets/img/hero-img.png" class="img-fluid animated" alt="">
              </div>
          </div>
      </div>

  </section><!-- End Hero -->

  <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
          <div class="container">

              <div class="row">
                  <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                      <img src="<?= base_url() ?>assets/img/about.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                      <h3>Mengapa harus kami?</h3>
                      <p class="text-justify">
                          Rumah Inovasi Karyasa merupakan sebuah media berbasis Website yang dapat digunakan oleh
                          seniman dan
                          pecinta
                          seni untuk bersama-sama menikmati indahnya suatu karya melalui pameran tanpa harus berkunjung
                          secara langsung. Kami memfasilitasi penikmat seni untuk dapat melalukan tour virtual pada
                          tiap-tiap pameran seni yang dilaksanakan
                      </p>
                      <a href="#services" class="read-more">Lihat Pameran <i class="icofont-long-arrow-right"></i></a>
                  </div>
              </div>

          </div>
      </section><!-- End About Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
          <div class="container">

              <div class="row counters">

                  <div class="col-lg-3 col-6 text-center">
                      <span data-toggle="counter-up">2</span>
                      <p>Pameran</p>
                  </div>

                  <div class="col-lg-3 col-6 text-center">
                      <span data-toggle="counter-up">120</span>
                      <p>Pengunjung</p>
                  </div>

                  <div class="col-lg-3 col-6 text-center">
                      <span data-toggle="counter-up">25</span>
                      <p>Karya Seni</p>
                  </div>

                  <div class="col-lg-3 col-6 text-center">
                      <span data-toggle="counter-up">2</span>
                      <p>Klien</p>
                  </div>

              </div>

          </div>
      </section><!-- End Counts Section -->



      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2>Tujuan</h2>
                  <p>Rumah Inovasi Karyasa Memiliki Beberapa Tujuan, diantaranya</p>
              </div>

              <div class="row">
                  <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                      <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                          <i class="bx bx-devices"></i>
                          <h4>Memudahkan Akses</h4>
                          <p>Peserta dapat mengakses kegiatan pameran dari manapun dan dengan menggunakan perangkat
                              apapun
                          </p>
                      </div>
                      <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                          <i class="bx bx-money"></i>
                          <h4>Hemat Biaya</h4>
                          <p>Melakukan konferensi secara daring dengan efektif sehingga menghematkan biaya dibandingkan
                              secara konvensional</p>
                      </div>
                      <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                          <i class="bx bx-globe"></i>
                          <h4>Meluaskan Jangkauan</h4>
                          <p>Memberikan jangkauan tak terbatas bagi peserta tanpa harus menghadiri arena pameran</p>
                      </div>
                      <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
                          <i class="bx bx-git-merge"></i>
                          <h4>Memberikan Alternatif</h4>
                          <p>Memungkinkan narasumber untuk memberikan paparan tanpa harus tatap muka</p>
                      </div>
                  </div>
                  <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
                      <img src="<?= base_url() ?>assets/img/features.svg" alt="" class="img-fluid">
                  </div>
              </div>

          </div>
      </section><!-- End Features Section -->

      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2>Daftar Pameran</h2>
                  <p>Berikut beberapa pameran yang dapat dikunjungi</p>
              </div>

              <div class="row">
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                      <div class="icon-box iconbox-blue">
                          <div class="icon">
                              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                      d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                  </path>
                              </svg>
                              <i class="bx bxl-dribbble"></i>
                          </div>
                          <h4><a href="<?= base_url() ?>p/usaha/silakarang">Silakarang</a></h4>
                          <p>Pameran ukiran hasil karya dengan batu cadas</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                      <div class="icon-box iconbox-yellow">
                          <div class="icon">
                              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                  <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                      d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                  </path>
                              </svg>
                              <i class='bx bxl-spring-boot'></i>

                          </div>
                          <h4><a href="<?= base_url() ?>p/usaha/tenun">Pertenunan Artha Dharma</a></h4>
                          <p>Pameran hasil tenun Artha Dharma</p>
                      </div>
                  </div>
              </div>

      </section><!-- End Services Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2>Galeri</h2>
                  <p>Beberapa kegiatan Rumah Inovasi Karyasa yang sudah terlaksana</p>
              </div>

              <div class="row">
                  <div class="col-lg-12 d-flex justify-content-center">
                      <ul id="portfolio-flters">
                          <li data-filter="*" class="filter-active">All</li>
                          <li data-filter=".filter-app">App</li>
                          <li data-filter=".filter-card">Card</li>
                          <li data-filter=".filter-web">Web</li>
                      </ul>
                  </div>
              </div>
              <div class="row portfolio-container">
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="<?= base_url() ?>assets/img/kegiatan/1.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>App 1</h4>
                              <p>App</p>
                          </div>
                          <div class="portfolio-links">
                              <a href="<?= base_url() ?>assets/img/kegiatan/1.png" data-gall="portfolioGallery"
                                  class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                      <div class="portfolio-wrap">
                          <img src="<?= base_url() ?>assets/img/kegiatan/2.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>Web 3</h4>
                              <p>Web</p>
                          </div>
                          <div class="portfolio-links">
                              <a href="<?= base_url() ?>assets/img/kegiatan/2.png" data-gall="portfolioGallery"
                                  class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="<?= base_url() ?>assets/img/kegiatan/3.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>App 2</h4>
                              <p>App</p>
                          </div>
                          <div class="portfolio-links">
                              <a href="<?= base_url() ?>assets/img/kegiatan/3.png" data-gall="portfolioGallery"
                                  class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                      <div class="portfolio-wrap">
                          <img src="<?= base_url() ?>assets/img/kegiatan/4.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>Card 2</h4>
                              <p>Card</p>
                          </div>
                          <div class="portfolio-links">
                              <a href="<?= base_url() ?>assets/img/kegiatan/4.png" data-gall="portfolioGallery"
                                  class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                      <div class="portfolio-wrap">
                          <img src="<?= base_url() ?>assets/img/kegiatan/5.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>Web 2</h4>
                              <p>Web</p>
                          </div>
                          <div class="portfolio-links">
                              <a href="<?= base_url() ?>assets/img/kegiatan/5.png" data-gall="portfolioGallery"
                                  class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="<?= base_url() ?>assets/img/kegiatan/6.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>App 3</h4>
                              <p>App</p>
                          </div>
                          <div class="portfolio-links">
                              <a href="<?= base_url() ?>assets/img/kegiatan/6.png" data-gall="portfolioGallery"
                                  class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                      <div class="portfolio-wrap">
                          <img src="<?= base_url() ?>assets/img/kegiatan/7.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>Card 1</h4>
                              <p>Card</p>
                          </div>
                          <div class="portfolio-links">
                              <a href="<?= base_url() ?>assets/img/kegiatan/7.png" data-gall="portfolioGallery"
                                  class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                      <div class="portfolio-wrap">
                          <img src="<?= base_url() ?>assets/img/kegiatan/8.png" class="img-fluid" alt="">
                          <div class="portfolio-info">
                              <h4>Card 3</h4>
                              <p>Card</p>
                          </div>
                          <div class="portfolio-links">
                              <a href="<?= base_url() ?>assets/img/kegiatan/8.png" data-gall="portfolioGallery"
                                  class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact section-bg">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2>Kontak Kami</h2>
                  <p>Informasi dan Pertanyaan dapat menghubungi kontak berikut</p>
              </div>

              <div class="row">
                  <div class="col-lg-6">
                      <div class="info-box mb-4">
                          <i class="bx bx-map"></i>
                          <h3>Alamat Kami</h3>
                          <p>Jln.Bisma Utara No.75x Singaraja, Buleleng, Bali 81117</p>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-6">
                      <div class="info-box  mb-4">
                          <i class="bx bx-envelope"></i>
                          <h3>Email Kami</h3>
                          <p>informasi@rumahinovasikaryasa.com</p>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-6">
                      <div class="info-box  mb-4">
                          <i class="bx bx-phone-call"></i>
                          <h3>Telepon</h3>
                          <p>+62 878-6327-7224</p>
                      </div>
                  </div>

              </div>

              <div class="row">

                  <div class="col-lg-6 ">
                      <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.822489868887!2d115.08767895042139!3d-8.119548794126233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd19a769979eeb7%3A0xb44045aa7c6abb75!2sJl.%20Bisma%20No.75%2C%20Banjar%20Tegal%2C%20Kec.%20Buleleng%2C%20Kabupaten%20Buleleng%2C%20Bali%2081117!5e0!3m2!1sid!2sid!4v1608713048917!5m2!1sid!2sid"
                          width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                          aria-hidden="false" tabindex="0"></iframe>
                  </div>

                  <div class="col-lg-6">
                      <form action="" method="post" class="form">
                          <div class="form-row">
                              <div class="col-md-6 form-group">
                                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda"
                                      data-rule="minlen:4" data-msg="Tolong masukkan nama anda" />
                                  <div class="validate"></div>
                              </div>
                              <div class="col-md-6 form-group">
                                  <input type="email" class="form-control" name="email" id="email"
                                      placeholder="Email Anda" data-rule="email"
                                      data-msg="Tolong masukkan email anda" />
                                  <div class="validate"></div>
                              </div>
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek"
                                  data-rule="minlen:4" data-msg="Tolong menulis subjek lebih dari 3 karakter" />
                              <div class="validate"></div>
                          </div>
                          <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required"
                                  data-msg="Tolong masukkan pesan yang ingin disampaikan"
                                  placeholder="Message"></textarea>
                              <div class="validate"></div>
                          </div>
                          <div class="text-center"><button type="submit" name="submit">Kirim Pesan</button></div>
                      </form>
                  </div>

              </div>

          </div>
      </section><!-- End Contact Section -->

  </main><!-- End #main -->