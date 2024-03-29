<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Studio Jingga | <?= esc($title) ?></title>

    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <?= link_tag('assets/admin/media/favicons/favicon.png') ?>
    <?= link_tag('assets/admin/media/favicons/favicon-192x192.png') ?>
    <?= link_tag('assets/admin/media/favicons/apple-touch-icon-180x180.png') ?>
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Codebase framework -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">


    <?= link_tag('assets/library/bootstrap/css/bootstrap.min.css') ?>
    <?= link_tag('assets/library/bootstrap-icons/bootstrap-icons.css') ?>
    <?= link_tag('assets/library/aos/aos.css') ?>
    <?= link_tag('assets/library/remixicon/remixicon.css') ?>
    <?= link_tag('assets/library/swiper/swiper-bundle.min.css') ?>
    <?= link_tag('assets/library/glightbox/css/glightbox.min.css') ?>
    <?= link_tag('assets/admin/css/codebase.min.css') ?>

    <!-- Template Main CSS File -->
    <?= link_tag('assets/css/style.css') ?>
    <?= link_tag('css/custom.css') ?>
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <?= $this->renderSection('content') ?>

    <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->

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

    <?= script_tag('assets/admin/js/codebase.core.min.js') ?>
    <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <?= script_tag('assets/admin/js/codebase.app.min.js') ?>

    <!-- Page JS Plugins -->
    <?= script_tag('assets/admin/js/plugins/chartjs/Chart.bundle.min.js') ?>

    <!-- Page JS Code -->
    <?= script_tag('assets/admin/js/pages/be_pages_dashboard.min.js') ?>
</body>

</html>