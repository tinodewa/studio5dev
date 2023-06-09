<!doctype html>
<html lang="en">

<head>
  <title>STUDIO 5 | <?= esc($title) ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Library CSS Files -->
  <?= link_tag('assets/library/bootstrap/css/bootstrap.min.css') ?>
  <?= link_tag('assets/library/bootstrap-icons/bootstrap-icons.css') ?>
  <?= link_tag('assets/library/aos/aos.css') ?>
  <?= link_tag('assets/library/remixicon/remixicon.css') ?>
  <?= link_tag('assets/library/swiper/swiper-bundle.min.css') ?>
  <?= link_tag('assets/library/glightbox/css/glightbox.min.css') ?>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

  <!-- Template Main CSS File -->
  <?= link_tag('assets/css/style.css') ?>
  <?= link_tag('css/custom.css') ?>

  <!-- =======================================================
  * Template Name: FlexStart - v1.7.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?= $this->renderSection('content') ?>

  <!-- Library JS Files -->
  <?= script_tag('assets/library/bootstrap/js/bootstrap.bundle.min.js') ?>
  <?= script_tag('assets/library/aos/aos.js') ?>
  <?= script_tag('assets/library/php-email-form/validate.js') ?>
  <?= script_tag('assets/library/swiper/swiper-bundle.min.js') ?>
  <?= script_tag('assets/library/purecounter/purecounter.js') ?>
  <?= script_tag('assets/library/isotope-layout/isotope.pkgd.min.js') ?>
  <?= script_tag('assets/library/glightbox/js/glightbox.min.js') ?>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

  <!-- global jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- Template Main JS File -->
  <?= script_tag('assets/js/main.js') ?>
  <?= $this->renderSection('custom_js') ?>
</body>

</html>