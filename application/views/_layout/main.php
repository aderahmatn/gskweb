<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Gisaka Network</title>
  <link rel="icon" href="<?= base_url() . 'assets/image/favicon.png' ?>" type="image/png">
  <!-- Plugins CSS -->
  <link rel="stylesheet" href="<?= base_url() . 'assets/plugins/bootstrap-4.3.1/css/bootstrap.css' ?>" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/plugins/meanmenu/meanmenu.css' ?>" />
  <!-- fonts -->
  <link rel="stylesheet" href="<?= base_url() . 'assets/fonts/ep-icon-fonts/css/style.css' ?>" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/fonts/fontawesome-5/css/all.min.css' ?>" />
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="<?= base_url() . 'assets/css/settings.css' ?>" />
  <link rel="stylesheet" href="<?= base_url() . 'assets/css/style.css' ?>" />

  <style>
    .hero-form .form-group button {
      background-color: #1290a4;
    }

    .footer-newsletter-form .form-group input {
      height: 60px;
      width: 100%;
      margin-right: 0px;
    }

    .footer-newsletter-form .form-group textarea {
      height: 100px;
      color: #666666;
      border-radius: 5px;
      background: rgba(18, 144, 164, 0.07);
      padding-left: 17px;
      border-color: transparent;
      width: 100%;
    }

    .modal-content .modal-body p {
      color: #666666;
      font-size: 17px;
      line-height: 28px;
      letter-spacing: -0.4px;
    }

    .modal-content .modal-footer button {
      color: #ffffff;
      font-weight: 700;
      letter-spacing: -1.12px;
      border-radius: 3px;
      background-color: #1290a4;
      width: 10%;
      height: 35px;
      font-size: 15px;
    }

    .header-btns {
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: flex-end;
      padding-right: 0;
    }

    .header-btns .btn-2 {
      margin: 0;
    }
  </style>
  <script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "9abc4738-062c-4135-924e-6d000731deb0";
    (function() {
      d = document;
      s = d.createElement("script");
      s.src = "https://client.crisp.chat/l.js";
      s.async = 1;
      d.getElementsByTagName("head")[0].appendChild(s);
    })();
  </script>
</head>

<body>
  <div class="site-wrapper">
    <!-- Header Area  -->
    <header class="site-header">
      <div class="container">
        <div class="row justify-content-center align-items-center position-relative">
          <div class="col-sm-3 col-6 col-lg-2 col-xl-2 order-lg-1">
            <div class="brand">
              <a href=""><img src="<?= base_url() . 'assets/image/gisaka-logo.png' ?>" alt="" style="height: 40px;" /></a>
            </div>
          </div>
          <div class="col-sm-8 col-lg-3 col-xl-3 d-none d-sm-block order-lg-3">
            <div class="header-btns">
              <div class="btn-2">
                <a href="#footer">Hubungi Kami</a>
              </div>
            </div>
          </div>
          <!-- Menu Block -->
          <div class="col-sm-1 col-6 col-lg-7 col-xl-6 offset-xl-1 position-static order-lg-2">
            <div class="main-navigation">
              <ul class="main-menu">
                <li class="menu-item"><a href="#home">Beranda</a></li>
                <li class="menu-item"><a href="#pricing">Blog</a></li>
                <li class="menu-item">
                  <a href="#layanan"> Layanan</a>
                </li>
                <li class="menu-item"><a href="#pricing">Produk</a></li>
                <li class="menu-item">

                  <a href="#tentang">Tentang Kami</a>
                </li>
                <li class="menu-item">

                  <a href="#footer">Kontak</a>
                </li>
              </ul>
            </div>
            <div class="mobile-menu"></div>
          </div>
        </div>
      </div>
    </header>
    <!-- Hero Area  -->
    <section class="hero-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 order-lg-2">
            <div class="hero-image">
              <img src="<?= base_url() . 'assets/image/landing-hero.svg' ?>" alt="" />
            </div>
          </div>
          <div class="col-lg-7 order-lg-1">
            <div class="hero-content">
              <h1>Rekan yang handal untuk perkembangan bisnis anda.</h1>
              <p>
                Dengan teknologi terbaru kami akan memberikan solusi yang simpel untuk beberapa tugas rumit anda.
              </p>
              <div class="hero-form">
                <form action="#footer">
                  <div class="form-group">
                    <button class="submit-btn">Dapat Solusi</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Layanan Area  -->
    <section class="pricing-section" id="layanan">
      <div class="container">
        <div class="section-title text-center">
          <h2>Layanan Terbaik Untuk Bisnis Anda</h2>
        </div>
        <div class="row mb-d-30 justify-content-center">
          <div class="col-md-6 col-lg-4 mb--30">
            <div class="justify-content-center">

            </div>
            <div class="feature-card">
              <div class="card-icon">
                <i class="fas fa-network-wired"></i>
              </div>
              <div class="card-content">
                <h3>Network installation</h3>
                <p>
                  Simplify your life with a votice-controlled device.
                </p>
                <div class="content-link">
                  <a href="" data-toggle="modal" data-target="#modalNetwork">Pelajari Selengkapnya <i class="icon icon-minimal-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb--30">
            <div class="feature-card">
              <div class="card-icon ">
                <i class="fas fa-wifi"></i>
              </div>
              <div class="card-content">
                <h3>Wireless solution</h3>
                <p>
                  Call anytime, our customer service expert are always ready
                  to help!
                </p>
                <div class="content-link">
                  <a href="">Pelajari Selengkapnya <i class="icon icon-minimal-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb--30">
            <div class="feature-card">
              <div class="card-icon">
                <i class="fas fa-pencil-ruler"></i>
              </div>
              <div class="card-content">
                <h3>Design Visual</h3>
                <p>
                  A Gisaka plan means your price is locked in, but you aren't.
                </p>
                <div class="content-link">
                  <a href="">Pelajari Selengkapnya <i class="icon icon-minimal-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb--30">
            <div class="feature-card">
              <div class="card-icon">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <div class="card-content">
                <h3>Software Development</h3>
                <p>
                  A Gisaka plan means your price is locked in, but you aren't.
                </p>
                <div class="content-link">
                  <a href="">Pelajari Selengkapnya <i class="icon icon-minimal-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb--30">
            <div class="feature-card">
              <div class="card-icon">
                <i class="fas fa-tools"></i>
              </div>
              <div class="card-content">
                <h3>Maintenance service</h3>
                <p>
                  A Gisaka plan means your price is locked in, but you aren't.
                </p>
                <div class="content-link">
                  <a href="">Pelajari Selengkapnya <i class="icon icon-minimal-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Tentang Kami  -->
    <section class="feature-section" id="tentang">
      <div class="shape">
        <img src="<?= base_url() . 'assets/image/landing-1-shape.svg' ?>" alt="" />
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-3 col-lg-6 col-md-5 col-sm-6 col-10">
            <div class="content-img">
              <img src="<?= base_url() . 'assets/image/tentang-kami.svg' ?>" alt="" />
            </div>
          </div>
          <div class="col-xl-7 offset-xl-1 col-lg-6 col-md-7 col-sm-6">
            <div class="content-left-content">
              <h2>Tentang Kami</h2>
              <p>
                Event is not like most tech conferences. We want our
                presentations to engage the audience, spark discussion and
                inspire new ideas.
              </p>
              <div class="content-bottom-part">
                <p>
                  Interested to see how it works? Schedule a free demo to get
                  to learn everything you need to know.
                </p>
                <!-- <div class="content-btn">
                  <a href="#" class="btn btn--primary">Kontak Kami</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer Section 06 -->
    <div class="footer-section" id="footer">
      <div class="container">
        <div class="footer-newsletter-section">
          <div class="row justify-content-center">
            <div class="row justify-content-center">
              <div class="col-lg-6 order-lg-2">
                <div class="hero-content">
                  <h1>Hubungi Kami</h1>
                  <div class="footer-newsletter-form">
                    <form action="">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama Lengkap">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Anda">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Pesan"></textarea>
                      </div>
                      <div class="form-group">
                        <button class="submit-btn">Kirim</button>
                      </div>
                    </form>
                  </div>
                  <div class="hero-content">
                    <p>
                      Team kami akan segera menghubungi anda setelah data anda dikirim.
                    </p>
                  </div>
                </div>

              </div>
              <div class="col-lg-6 ">
                <div class="hero-image">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.344481995989!2d108.24792731544436!3d-6.849244968911094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f25a5fd16ff6d%3A0x31553a270d7cac9e!2sGisaka%20Network!5e0!3m2!1sid!2sid!4v1590992430459!5m2!1sid!2sid" width="100%" height="530" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row margin-decrese">
          <div class="col-xl-5 col-lg-5 col-margin">
            <div class="single-footer">
              <div class="footer-title">
                <img src="<?= base_url() . 'assets/image/gisaka-logo.png' ?>" alt="" style="height: 50px" />
              </div>
              <div class="footer-text">
                <p>
                  Big, small, online, offline, local. Size doesn't matter. We
                  work on diverse projects for top brands as well as for cool
                  startups.
                </p>
              </div>
              <ul class="footer-social-list">
                <li>
                  <a href="">
                    <i class="icon icon-logo-fb-simple"></i>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="icon icon-logo-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fab fa-youtube"></i>  
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="icon icon-google"></i>
                  </a>
                </li>
                <li>
                  <a href="">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4 col-6 offset-lg-1 col-margin">
            <div class="single-footer">
              <div class="footer-title">
                <h6>Menu Bantuan</h6>
              </div>
              <ul class="footer-list">
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#layanan">Layanan</a></li>
                <li><a href="">Produk</a></li>
                <li><a href="">Blog</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-sm-4 col-margin">
            <div class="single-footer">
              <div class="footer-title">
                <h6>Kontak Kami</h6>
              </div>

              <ul class="footer-list">
                <li><a href="tel:+6281380748000"><i class="fas fa-phone-square-alt"></i> +62813-8074-8000</a></li>
                <li><a href="mailto:support@gisaka.net"><i class="fas fa-envelope-open"></i> support@gisaka.net</a></li>
                <li>
                  <div class="footer-text">
                    <p>
                      Jalan Semar No. A30 Kec. Majalengka<br>
                      Perumahan Sindangkasih - Majalengka <br>
                      Jawa Barat 45411 - Indonesia
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Vendor JS-->
  <script src="<?= base_url() . 'assets/plugins/jquery/jquery.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/plugins/jquery/jquery-migrate.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/plugins/bootstrap-4.3.1/js/bootstrap.bundle.js' ?>"></script>
  <script src="<?= base_url() . 'assets/plugins/meanmenu/jquery.meanmenu.js' ?>"></script>
  <!-- Plugins JS -->
  <script src="<?= base_url() . 'assets/js/active.js' ?>"></script>
</body>

</html>

<!-- Modal -->
<div class="modal fade" id="modalNetwork" tabindex="-1" role="dialog" aria-labelledby="modalNetwork" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p>Kami akan memberikan solusi terbaik mengenai instalasi jaringan untuk membantu </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>