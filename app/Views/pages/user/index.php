<?= $this->extend('layout/page_layout.php') ?>

<?= $this->section('content') ?>

<?php $session = session();

function shortNumber($num)
{
    $units = ['', 'k', 'jt', 'm', 't'];
    for ($i = 0; $num >= 1000; $i++) {
        $num /= 1000;
    }
    return round($num, 1) . $units[$i];
}
?>

<?= $this->include('pages/user/layout/user_navbar_beranda.php') ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Abadikan Momen Berhargamu Bersama Kami</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Capture your precious moments with us</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#pricing" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>TRY IT NOW</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="/assets/img/landing-page.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h2>WHO WE ARE</h2>
                        <p>
                            Studio 5 merupakan tempat menemukan talenta talenta di bidang fotografi. Temukan fotografer handal untuk semua kebutuhan jasa fotografi anda hanya disini. Dapatkan hasil foto yang berkualitas namun dengan harga yang terjangkau. Kami akan terus berinovasi untuk memajukan industri fotografi di Indonesia.
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="/assets/img/about-fix.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>paket yang kami tawarkan</h2>
                <p>PAKET</p>
            </header>
            <div class="row gy-4" data-aos="fade-left">
                <?php foreach ($pakets as $key => $paket) : ?>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <?php
                            if ($paket->status_paket == '1') {
                                echo "<span class=\"featured\">Best Seller</span>";
                            } else {
                                echo "";
                            }
                            ?>
                            <h3 style="color: <?= $paket->warna_nama_paket; ?>;"><?= $paket->nama_paket; ?></h3>
                            <div class="price">
                                <?= shortNumber($paket->harga_paket); ?>
                                <span> /
                                    <?php
                                    if ($paket->keterangan_harga_paket == '1') {
                                        echo "paket";
                                    } else if ($paket->keterangan_harga_paket == '2') {
                                        echo "paket";
                                    } else {
                                        echo "-";
                                    }
                                    ?>
                                </span>
                            </div>
                            <img src="/assets/img/package/<?= $paket->gambar_paket; ?>" class="img-fluid" alt="">
                            <ul>
                                <?php if ($paket->fotografer != 0) { ?>
                                    <li>
                                        <?= $paket->fotografer ?> Fotografer
                                        <?php if ($paket->videografer != 0) { ?>
                                            & <?= $paket->videografer ?> Videografer
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                                <li><?= $paket->waktu ?> Jam Liputan</li>
                                <li><?php
                                    $jumlah_tempat = $paket->tempat_indoor + $paket->tempat_outdoor;
                                    if ($paket->dua_tempat == false) {
                                        if ($paket->tempat_indoor > 0) {
                                            echo $jumlah_tempat . " lokasi indoor";
                                        } else if ($paket->tempat_outdoor > 0) {
                                            echo $jumlah_tempat . " lokasi outdoor";
                                        } else {
                                            echo $jumlah_tempat . " lokasi indoor/outdoor";
                                        }
                                    } else {
                                        echo $jumlah_tempat . " lokasi indoor & outdoor";
                                    }
                                    ?></li>
                                <li><?php echo $paket->hasil_jumlah .  " cetak foto ukuran " . $paket->hasil_ukuran_cetak . " plus frame" ?></li>

                                <?php if ($paket->hasil_cinematic) { ?>
                                    <li><?php echo "Editing " . $paket->hasil_editing . " foto pilihan" ?></li>
                                    <li>Video cinematic</li>
                                <?php } else { ?>
                                    <li><?= $paket->kapasitas ?></li>
                                <?php } ?>
                            </ul>
                            <a href="/paket/detail/<?= $paket->id_paket ?>" class="btn-buy">Detail Paket</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- paket custom -->
            </div>
            <footer class="section-footer mt-5 text-center">
                <h3>Bingung mau pilih apa?</h3>
                <p>Kami ada solusinya!</p>
                <div class="col-lg-3 col-md-6 text-center m-auto mt-5" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #0abde3;">Custom</h3>
                        <img src="/assets/img/package/custom.png" class="img-fluid" alt="">
                        <ul>
                            <li>Tentukan sendiri rincian paket sesuai dengan kebutuhan kamu <3 </li>
                        </ul>
                        <a href="/paket/custom/0" class="btn-buy">Mulai Custom</a>
                    </div>
                </div>
            </footer>
        </div>
    </section>
    <!-- End Pricing Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Hasil foto yang kami selesaikan</h2>
                <p>PORTOFOLIO</p>
            </header>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-prewedding">Pre-Wedding</li>
                        <li data-filter=".filter-wedding">Wedding</li>
                        <li data-filter=".filter-maternity">Maternity</li>
                        <li data-filter=".filter-family">Family</li>
                        <li data-filter=".filter-birthday">Birthday</li>
                        <li data-filter=".filter-group">Group</li>
                        <li data-filter=".filter-graduation">Graduation</li>
                        <li data-filter=".filter-event">Event</li>
                    </ul>
                </div>
            </div>
            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-6 portfolio-item filter-prewedding">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pre-Wedding</h4>
                            <div class="portfolio-links">
                                <a href="/assets/img/portfolio/1.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Paket Pre-Wedding"><i class="bi bi-plus"></i></a>
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/4.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Wedding</h4>
                            <div class="portfolio-links">
                                <a href="/assets/img/portfolio/4.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Paket Wedding"><i class="bi bi-plus"></i></a>
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-family">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/7.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Family</h4>
                            <div class="portfolio-links">
                                <a href="/assets/img/portfolio/7.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Paket Family"><i class="bi bi-plus"></i></a>
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-group">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/8.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Group</h4>
                            <div class="portfolio-links">
                                <a href="/assets/img/portfolio/8.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Paket Group"><i class="bi bi-plus"></i></a>
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-maternity">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/9.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Maternity</h4>
                            <div class="portfolio-links">
                                <a href="/assets/img/portfolio/9.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Paket Maternity"><i class="bi bi-plus"></i></a>
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-birthday">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/11.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Birthday</h4>
                            <div class="portfolio-links">
                                <a href="/assets/img/portfolio/11.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Paket Birthday"><i class="bi bi-plus"></i></a>
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-graduation">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/10.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Graduation</h4>
                            <div class="portfolio-links">
                                <a href="/assets/img/portfolio/10.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Paket Graduation"><i class="bi bi-plus"></i></a>
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-prewedding">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/2.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pre-Wedding</h4>
                            <div class="portfolio-links">
                                <a href="/assets/img/portfolio/2.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Paket Pre-Wedding"><i class="bi bi-plus"></i></a>
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-event">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/12.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Event</h4>
                            <div class="portfolio-links">
                                <a href="/assets/img/portfolio/12.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Paket Event"><i class="bi bi-plus"></i></a>
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/5.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Wedding</h4>
                            <div class="portfolio-links">
                                <a href="/assets/img/portfolio/5.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Paket Wedding"><i class="bi bi-plus"></i></a>
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/13.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Wedding</h4>
                            <div class="portfolio-links">
                                <a href="/assets/img/portfolio/13.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Paket Wedding"><i class="bi bi-plus"></i></a>
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-graduation">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/14.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Graduation</h4>
                            <div class="portfolio-links">
                                <a href="/assets/img/portfolio/14.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Paket Graduation"><i class="bi bi-plus"></i></a>
                                <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p>
            </header>
            <div class="row">
                <div class="col-lg-6">
                    <!-- F.A.Q List 1-->
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                    Bagaimana cara memesan di website STUDIO 5 ?
                                </button>
                            </h2>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    Anda dapat memilih paket yang sudah kami tawarkan pada halaman paket. Setelah itu anda dapat memasukan detail pesanan seperti alamat, hari, dan jam. Setelah itu lakukan pembayaran.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                    Apakah dapat menukar detail pesanan seperti hari dan jam?
                                </button>
                            </h2>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    Pelanggan hanya diberi satu kesempatan untuk mengubah detail pesanan. pesanan yang diubah harus lebih dari H - 3.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                    Bagaimana saya dapat melihat hasil foto ?
                                </button>
                            </h2>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    Anda dapat mengunduh hasil foto yang akan kami upload dalam website setelah editing selesai dilakukan. hasil foto hanya akan terpampang dalam website selama 7 hari.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- F.A.Q List 2-->
                    <div class="accordion accordion-flush" id="faqlist2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                    Apa saja metode pembayaran yang tersedia?
                                </button>
                            </h2>
                            <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    Anda dapat menggunakan berbagai metode pembayaran. Cek link ini untuk info lebih lanjut.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                    Apakah saya dapat menukar paket jasa fotografer?
                                </button>
                            </h2>
                            <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    Semua paket yang telah dipesan tidak bisa ditukar. Oleh karena itu, kami ingin mengingatkan kepada Pelanggan untuk memilih paket yang tepat dengan detail yang benar.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                    Mengapa pembayaran saya belum terverifikasi meskipun telah melakukan pembayaran?
                                </button>
                            </h2>
                            <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                                <div class="accordion-body">
                                    Ada beberapa faktor yang dapat menyebabkan pembayaran kamu belum terverifikasi. contohnya Belum upload bukti transfer atau Pembayaran tidak sesuai dengan jumlah yang tertera pada halaman Info Pembayaran, yaitu harga pesanan ditambah kode unik.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End F.A.Q Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Apa Kata Mereka</h2>
                <p>TESTIMONI</p>
            </header>
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">
                    <?php foreach ($ulasanUserPakets as $key => $ulasanUserPaket) : ?>
                        <!-- Start testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <?php for ($i = 0; $i < $ulasanUserPaket->bintang; $i++) { ?>
                                        <i class="bi bi-star-fill"></i>
                                    <?php } ?>
                                </div>
                                <p>
                                    <?= $ulasanUserPaket->deskripsi ?>
                                </p>
                                <div class="profile mt-auto">
                                    <?php if ($ulasanUserPaket->foto_profil != "") { ?>
                                        <img src="assets/img/userprofile/<?= $ulasanUserPaket->foto_profil ?>" class="testimonial-img" alt="">
                                    <?php } else { ?>
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <?php } ?>
                                    <h3><?= $ulasanUserPaket->nama_lengkap ?></h3>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </header>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Alamat</h3>
                                <p>Jl. Arjowinangun no 17<br>Kedungkandang, Malang</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>No Telp</h3>
                                <p>+62 812 3350 225<br>+62 858 5524 8586</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>abdullahstudio5@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Jam Operasi</h3>
                                <p>Setiap Hari Selain Jumat<br>8:00AM - 19:00PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                <button type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->

<?= $this->include('pages/user/layout/user_footer.php') ?>

<?= $this->endSection() ?>