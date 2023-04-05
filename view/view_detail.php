<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Athiphong</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/icon.png" rel="icon">
  <link href="../assets/img/icon.png" rel="icon-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/Style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="../index.php">OSANewTon</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#header">Home</a></li>
          <li><a class="nav-link scrollto" href="#portfolio-details">About</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Profile</a></li>
          <li><a class="nav-link scrollto" href="#contact">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../index.php">Home</a></li>
          <li>Profile Details</li>
        </ol>
        <h2>Profile Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="../assets/img/studyCard/<?= $jsonDecode["imgD1"]; ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../assets/img/studyCard/<?= $jsonDecode["imgD2"]; ?>"" alt="">
                </div>

                <div class=" swiper-slide">
                  <img src="../assets/img/studyCard/<?= $jsonDecode["imgD3"]; ?>"" alt="">
                </div>

              </div>
              <div class=" swiper-pagination">
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>Profile</h3>
                <ul>
                  <li><strong>ชื่อ</strong>: <?= $jsonDecode["name"]; ?> <?= $jsonDecode["lastname"]; ?></li>
                  <li><strong>เกิดวันที่</strong>: <?= $newDate ?></li>
                  <li><strong>อายุ</strong>: <?= $json_Age[1]; ?> ปี</li>
                  <li><strong>สถานภาพ</strong>: <?= $calyear; ?></li>
                </ul>
              </div>
              <div class="portfolio-description">
                <h2>This is an example of profile detail</h2>
                <p>
                  A professional portfolio is a powerful tool to advance your career. That’s because it’s a great showcase of your expertise and dedication, using real-world samples and examples of your work.
                  eius.
                </p>
                <p>
                  These examples may come from your studies, previous work experience, or even hobbies. What matters is that you put your previous experiences towards gaining new ones: a new job, more clients, a bigger professional network, recognition.
                </p>
              </div>
            </div>

          </div>

        </div>
    </section><!-- End Portfolio Details Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title">
          <span>Students</span>
          <h2>Card</h2>
          <p>This is an example of Students Card</p>
        </div>
        <?php include "../view/view_cardDetail.php"; ?>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <br>
      <h3>Welcome to Website</h3>
      <p>My name is Athiphong Hinoon 644259026 64/45 Major : SoftwareEnginearing.</p>
      <div class="social-links">
        <a href="" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyFunction</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://npru.ac.th/index.php" target="_blank">NPRU</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>