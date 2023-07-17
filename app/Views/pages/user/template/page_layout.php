<!doctype html>
<html lang="en">

<head>
  <title>Studio Jingga | <?= esc($title) ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta content="Studio Jingga" name="description">
  <meta content="photography" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/mylogo.png" rel="icon">
  <link href="assets/img/mylogo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

  <!-- Library CSS Files -->
  <?= link_tag('assets/library/bootstrap/css/bootstrap.min.css') ?>
  <?= link_tag('assets/library/bootstrap-icons/bootstrap-icons.css') ?>
  <?= link_tag('assets/library/aos/aos.css') ?>
  <?= link_tag('assets/library/remixicon/remixicon.css') ?>
  <?= link_tag('assets/library/swiper/swiper-bundle.min.css') ?>
  <?= link_tag('assets/library/glightbox/css/glightbox.min.css') ?>
  <?= link_tag('assets/library/rating/css/star-rating.css') ?>
  <?= link_tag('assets/library/themes/krajee-fas/theme.css') ?>
  <?= link_tag('assets/library/themes/krajee-svg/theme.css') ?>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

  <!-- rating -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <?= script_tag('assets/library/rating/js/star-rating.js') ?>
  <?= script_tag('assets/library/rating/themes/krajee-fas/theme.js') ?>
  <?= script_tag('assets/library/rating/themes/krajee-svg/theme.js') ?>

  <!-- Template Main CSS File -->
  <?= link_tag('assets/css/style.css') ?>
  <?= link_tag('css/custom.css') ?>

  <?= $this->renderSection('head_resource') ?>
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

  <!-- Template Main JS File -->
  <?= script_tag('assets/js/main.js') ?>
  <?= $this->renderSection('custom_js') ?>
</body>

</html>