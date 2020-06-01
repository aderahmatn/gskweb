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
  <link href="<?= base_url() . 'assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css' ?>" rel="stylesheet">
  <link href="<?= base_url() . 'assets/plugins/toastr/toastr.min.css' ?>" rel="stylesheet">

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

    .content-right-content p,
    .content-left-content p {

      text-align: justify;
    }

    .single-footer .footer-text p {

      text-align: justify;
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
              <a href="<?= base_url() ?>"><img src="<?= base_url() . 'assets/image/gisaka-logo.png' ?>" alt="" style="height: 40px;" /></a>
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
                <li class="menu-item"><a href="<?= base_url() ?>">Beranda</a></li>
                <li class="menu-item"><a href="<?= base_url() . 'blog' ?>" target="_blank">Blog</a></li>
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
    <?= $contents ?>
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
                    <form action="<?=base_url('landing/submit')?>" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="Name" required>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Anda" name="Email" required>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Pesan" name="Message" required></textarea>
                      </div>
                      <div class="form-group">
                        <button class="submit-btn" type="submit">Kirim</button>
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
                  Berpegang teguh pada profesionalisme kerja serta berkomitmen atas setiap pelayanannya, bahwa kami percaya mampu memberikan product & jasa yang berkualitas dan konsisten serta memiliki nilai tambah demi tercapainya tujuan bersama.
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
  <script src="<?= base_url() . 'assets/plugins/sweetalert2/sweetalert2.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/plugins/toastr/toastr.min.js' ?>"></script>
</body>

</html>
<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 10000
    });
    <?php if ($this->session->flashdata('success')) { ?>
      Toast.fire({
        type: 'success',
        title: '<?= $this->session->flashdata('success'); ?>'
      });
    <?php } else if ($this->session->flashdata('error')) {  ?>
      Toast.fire({
        type: 'error',
        title: '<?= $this->session->flashdata('error'); ?>'
      });
    <?php } else if ($this->session->flashdata('warning')) {  ?>
      Toast.fire({
        type: 'warning',
        title: '<?= $this->session->flashdata('warning'); ?>'
      });
    <?php } else if ($this->session->flashdata('info')) {  ?>
      Toast.fire({
        type: 'info',
        title: '<?= $this->session->flashdata('info'); ?>'
      });
    <?php } ?>
  });
</script>