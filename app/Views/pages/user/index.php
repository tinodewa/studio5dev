<?= $this->extend('pages/user/template/page_layout.php') ?>

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

<?= $this->include('pages/user/template/navbar.php') ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Abadikan Momen Berhargamu Bersama Kami!</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Capture your precious moments with us!</h2>
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
                <div class="col-12 d-flex flex-column text-center justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h2>WHO WE ARE</h2>
                        <p>
                            Studio Jingga merupakan bagian dari CV. Semut Jingga yang bergerak dalam bidang industri creative. Semut Jingga Studio membantu dalam pembuatan foto buku tahunan yg ingin konsep lookbook atau konsep foto dalam studio. Selain itu Studio Jingga membantu anda mengabadikan momen berharga anda bersama sahabat, keluarga, teman kerja, pacar, dan orang-orang yg berarti dalam hidup kalian.
                        </p>

                    </div>
                </div>
                <div class="col-12 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="/assets/img/about-banner.png" class="img-fluid" alt="">
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
            <div class="row gy-4 justify-content-center" data-aos="fade-left">
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #9F8B56;">Engagement</h3>
                        <img src="/assets/img/package/engagement 1.png" class="img-fluid" alt="">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalEngagement">
                            Detail paket
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #D76B6E;">Prewedding</h3>
                        <img src="/assets/img/package/prewedding-2.png" class="img-fluid" alt="">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalPrewedding">
                            Detail paket
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #B67909;">Wedding</h3>
                        <img src="/assets/img/package/wedding-2.png" class="img-fluid" alt="">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalWedding">
                            Detail paket
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #D4805E;">Maternity</h3>
                        <img src="/assets/img/package/prewedding-3.png" class="img-fluid" alt="">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalMaternity">
                            Detail paket
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #8F8827;">Graduation</h3>
                        <img src="/assets/img/package/graduation.png" class="img-fluid" alt="">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalGraduation">
                            Detail paket
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #B5872C;">Family</h3>
                        <img src="/assets/img/package/family-3.png" class="img-fluid" alt="">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalFamily">
                            Detail paket
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #AC6C85;">Group</h3>
                        <img src="/assets/img/package/group-2.png" class="img-fluid" alt="">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalGroup">
                            Detail paket
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #898FEA;">Event</h3>
                        <img src="/assets/img/package/event-1.png" class="img-fluid" alt="">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalEvent">
                            Detail paket
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #7B6556;">Couple</h3>
                        <img src="/assets/img/package/couple.png" class="img-fluid" alt="">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalCouple">
                            Detail paket
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #A55474;">Personal</h3>
                        <img src="/assets/img/package/personal.png" class="img-fluid" alt="">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalPersonal">
                            Detail paket
                        </button>
                    </div>
                </div>
            </div>
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
                        <li data-filter=".filter-engagement">Engagement</li>
                        <li data-filter=".filter-prewedding">Pre-Wedding</li>
                        <li data-filter=".filter-wedding">Wedding</li>
                        <li data-filter=".filter-maternity">Maternity</li>
                        <li data-filter=".filter-graduation">Graduation</li>
                        <li data-filter=".filter-family">Family</li>
                        <li data-filter=".filter-group">Group</li>
                        <li data-filter=".filter-event">Event</li>
                        <li data-filter=".filter-couple">Couple</li>
                        <li data-filter=".filter-personal">Personal</li>
                    </ul>
                </div>
            </div>
            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-6 portfolio-item filter-prewedding">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/1.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pre-Wedding</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-engagement">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/4.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Engagement</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-family">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/7.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Family</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-group">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/8.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Group</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-maternity">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/9.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Maternity</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-personal">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/11.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Birthday</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-graduation">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/10.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Graduation</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-prewedding">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/2.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Pre-Wedding</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-event">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/12.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Event</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/5.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Wedding</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/13.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Wedding</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-graduation">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/portfolio/14.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Graduation</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-couple">
                    <div class="portfolio-wrap">
                        <img src="/assets/img/Prewedding/pw-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Couple</h4>
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

    <!-- list modal -->
    <!-- Modal Prewedding -->
    <div class="modal fade" id="modalPrewedding" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Paket Prewedding</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row gy-4 justify-content-center" data-aos="fade-left">
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="box text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalPreweddingIndoor">
                                    <img src="/assets/img/Prewedding/pw-3.jpg" class="img-fluid" width="135" alt="">
                                    <h4 style="color: #141414;" class="mt-1">Indoor</h4>
                                </button>
                                <!-- Modal -->
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="box text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalPreweddingOutdoor">
                                    <img src="/assets/img/Prewedding/w-2.jpg" class="img-fluid" width="135" alt="">
                                    <h4 style="color: #141414;" class="mt-1">Outdoor</h4>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal wedding -->
    <div class="modal fade" id="modalWedding" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Paket Wedding</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row gy-4 justify-content-center" data-aos="fade-left">
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="box text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalAkad">
                                    <img src="/assets/img/wedding/akad.png" class="img-fluid" width="135" alt="">
                                    <h4 style="color: #141414;" class="mt-1">Akad</h4>
                                </button>
                                <!-- Modal -->
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="box text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalResepsi">
                                    <img src="/assets/img/wedding/resepsi.png" class="img-fluid" width="135" alt="">
                                    <h4 style="color: #141414;" class="mt-1">Resepsi</h4>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal graduation -->
    <div class="modal fade" id="modalGraduation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Paket Graduation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row gy-4 justify-content-center" data-aos="fade-left">
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="box text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalGraduationIndoor">
                                    <img src="/assets/img/Graduation/g-1.jpg" class="img-fluid" width="135" alt="">
                                    <h4 style="color: #141414;" class="mt-1">Graduation Indoor</h4>
                                </button>
                                <!-- Modal -->
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="box text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-buy" data-bs-toggle="modal" data-bs-target="#modalGraduationOutdoor">
                                    <img src="/assets/img/portfolio/10.png" class="img-fluid" width="135" alt="">
                                    <h4 style="color: #141414;" class="mt-1">Graduation Outdoor</h4>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- list submodal -->
    <!-- Modal Akad -->
    <div class="modal fade" id="modalAkad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details" style="padding-top:0;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="portfolio-details-slider swiper">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/4.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/5.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/13.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="modal-title me-4" id="exampleModalLabel">Paket Wedding (Akad)</h5>
                                            <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                            <div class="list-group flex-row mt-4" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage active" id="list-controller-akad-0" data-bs-toggle="list" href="#list-akad-0" role="tab" aria-controls="list-akad-0">SIMPLE PACKAGE</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-akad-1" data-bs-toggle="list" href="#list-akad-1" role="tab" aria-controls="list-akad-1">PREMIUM PACKAGE</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-akad-2" data-bs-toggle="list" href="#list-akad-2" role="tab" aria-controls="list-akad-2">EXCLUSIVE PACKAGE</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php foreach ($paketsAkad as $key => $paketAkad) : ?>
                                                    <div class="tab-pane fade show <?php if ($key == 0) {
                                                                                        echo 'active';
                                                                                    } ?>" id="list-akad-<?= $key ?>" role="tabpanel" aria-labelledby="list-akad-<?= $key ?>">
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Harga </strong>:
                                                                        <?=
                                                                        helper('number');
                                                                        echo number_to_currency($paketAkad->harga_paket, 'IDR', 'id_ID');
                                                                        ?>
                                                                    </li>
                                                                    <li><strong>Tenaga Kerja </strong>:

                                                                        <?php if ($paketAkad->fotografer != 0) {
                                                                            echo $paketAkad->fotografer ?>
                                                                            Fotografer
                                                                            <?php if ($paketAkad->videografer != 0) { ?>
                                                                                <?= $paketAkad->videografer ?> Videografer
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <?php if ($paketAkad->asisten != 0) {
                                                                            echo $paketAkad->asisten ?>
                                                                            Asisten
                                                                        <?php } ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Waktu kerja </strong>:
                                                                        <?= $paketAkad->waktu_kerja; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto </strong>:
                                                                        <?= $paketAkad->jumlah_foto; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto edit </strong>:
                                                                        <?= $paketAkad->jumlah_foto_edit; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Cetak </strong>:
                                                                        <?= $paketAkad->cetak_foto; ?>
                                                                    </li>
                                                                    <?php if ($paketAkad->videografi != '') { ?>
                                                                        <li>
                                                                            <strong>Videografi </strong>:
                                                                            <?= $paketAkad->videografi; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Penyimpanan </strong>:
                                                                        <?= $paketAkad->penyimpanan; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Deskripsi Paket </strong>:
                                                                        <?= $paketAkad->deskripsi_paket; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="portfolio-description">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <a href="#" id="pesanSekarangAkad<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="pesanTextAkad<?= $key ?>">Pesan Sekarang</span>
                                                                                <div id="pesanLoadingAkad<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="#" id="masukkanKeranjangAkad<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="keranjangTextAkad<?= $key ?>">Masukkan Keranjang</span>
                                                                                <div id="keranjangLoadingAkad<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="https://wa.me/6285156443674" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                Konsultasi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- js untuk pesanan -->
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#pesanSekarangAkad<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var pesanText = document.getElementById("pesanTextAkad<?= $key ?>");
                                                                var pesanLoading = document.getElementById("pesanLoadingAkad<?= $key ?>");

                                                                pesanText.classList.add("d-none");
                                                                pesanLoading.classList.remove("d-none");

                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketAkad->id_paket ?>,
                                                                                    type: 'pesan',
                                                                                },
                                                                                success: function(response) {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                    window.location.href = '<?= base_url('/checkout') ?>';
                                                                                },
                                                                                error: function() {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        pesanText.classList.remove("d-none");
                                                                        pesanLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                            $('#masukkanKeranjangAkad<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var keranjangText = document.getElementById("keranjangTextAkad<?= $key ?>");
                                                                var keranjangLoading = document.getElementById("keranjangLoadingAkad<?= $key ?>");

                                                                keranjangText.classList.add("d-none");
                                                                keranjangLoading.classList.remove("d-none");

                                                                const anchorBtn = document.getElementById('masukkanKeranjangAkad<?= $key ?>');
                                                                anchorBtn.disabled = true;
                                                                // perform AJAX request here
                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketAkad->id_paket ?>,
                                                                                    type: 'keranjang',
                                                                                },
                                                                                success: function(response) {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                },
                                                                                error: function() {
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        keranjangText.classList.remove("d-none");
                                                                        keranjangLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Portfolio Details Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Resepsi -->
    <div class="modal fade" id="modalResepsi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details" style="padding-top:0;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="portfolio-details-slider swiper">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/4.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/5.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/13.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="modal-title me-4" id="exampleModalLabel">Paket Resepsi</h5>
                                            <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                            <div class="list-group flex-row mt-4" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage active" id="list-controller-resepsi-0" data-bs-toggle="list" href="#list-resepsi-0" role="tab" aria-controls="list-resepsi-0">BRONZE PACKAGE</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-resepsi-1" data-bs-toggle="list" href="#list-resepsi-1" role="tab" aria-controls="list-resepsi-1">SILVER PACKAGE RESEPSI + TEMU</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-resepsi-2" data-bs-toggle="list" href="#list-resepsi-2" role="tab" aria-controls="list-resepsi-2">GOLD PACKAGE RESEPSI + AKAD</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-resepsi-3" data-bs-toggle="list" href="#list-resepsi-3" role="tab" aria-controls="list-resepsi-3">PLATINUM PACKAGE RESEPSI + AKAD</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-resepsi-4" data-bs-toggle="list" href="#list-resepsi-4" role="tab" aria-controls="list-resepsi-4">TITANIUM PACKAGE RESEPSI + AKAD</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php foreach ($paketsResepsi as $key => $paketResepsi) : ?>
                                                    <div class="tab-pane fade show <?php if ($key == 0) {
                                                                                        echo 'active';
                                                                                    } ?>" id="list-resepsi-<?= $key ?>" role="tabpanel" aria-labelledby="list-resepsi-<?= $key ?>">
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Harga </strong>:
                                                                        <?=
                                                                        helper('number');
                                                                        echo number_to_currency($paketResepsi->harga_paket, 'IDR', 'id_ID');
                                                                        ?>
                                                                    </li>
                                                                    <li><strong>Tenaga Kerja </strong>:

                                                                        <?php if ($paketResepsi->fotografer != 0) {
                                                                            echo $paketResepsi->fotografer ?>
                                                                            Fotografer
                                                                            <?php if ($paketResepsi->videografer != 0) { ?>
                                                                                <?= $paketResepsi->videografer ?> Videografer
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <?php if ($paketResepsi->asisten != 0) {
                                                                            echo $paketResepsi->asisten ?>
                                                                            Asisten
                                                                        <?php } ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Waktu kerja </strong>:
                                                                        <?= $paketResepsi->waktu_kerja; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto </strong>:
                                                                        <?= $paketResepsi->jumlah_foto; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto edit </strong>:
                                                                        <?= $paketResepsi->jumlah_foto_edit; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Cetak </strong>:
                                                                        <?= $paketResepsi->cetak_foto; ?>
                                                                    </li>
                                                                    <?php if ($paketResepsi->videografi != '') { ?>
                                                                        <li>
                                                                            <strong>Videografi </strong>:
                                                                            <?= $paketResepsi->videografi; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Penyimpanan </strong>:
                                                                        <?= $paketResepsi->penyimpanan; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Deskripsi Paket </strong>:
                                                                        <?= $paketResepsi->deskripsi_paket; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="portfolio-description">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <a href="#" id="pesanSekarangResepsi<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="pesanTextResepsi<?= $key ?>">Pesan Sekarang</span>
                                                                                <div id="pesanLoadingResepsi<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="#" id="masukkanKeranjangResepsi<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="keranjangTextResepsi<?= $key ?>">Masukkan Keranjang</span>
                                                                                <div id="keranjangLoadingResepsi<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="https://wa.me/6285156443674" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                Konsultasi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- js untuk pesanan -->
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#pesanSekarangResepsi<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var pesanText = document.getElementById("pesanTextResepsi<?= $key ?>");
                                                                var pesanLoading = document.getElementById("pesanLoadingResepsi<?= $key ?>");

                                                                pesanText.classList.add("d-none");
                                                                pesanLoading.classList.remove("d-none");

                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketResepsi->id_paket ?>,
                                                                                    type: 'pesan',
                                                                                },
                                                                                success: function(response) {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                    window.location.href = '<?= base_url('/checkout') ?>';
                                                                                },
                                                                                error: function() {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        pesanText.classList.remove("d-none");
                                                                        pesanLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                            $('#masukkanKeranjangResepsi<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var keranjangText = document.getElementById("keranjangTextResepsi<?= $key ?>");
                                                                var keranjangLoading = document.getElementById("keranjangLoadingResepsi<?= $key ?>");

                                                                keranjangText.classList.add("d-none");
                                                                keranjangLoading.classList.remove("d-none");

                                                                const anchorBtn = document.getElementById('masukkanKeranjangResepsi<?= $key ?>');
                                                                anchorBtn.disabled = true;
                                                                // perform AJAX request here
                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketResepsi->id_paket ?>,
                                                                                    type: 'keranjang',
                                                                                },
                                                                                success: function(response) {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                },
                                                                                error: function() {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        keranjangText.classList.remove("d-none");
                                                                        keranjangLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Portfolio Details Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Engagement -->
    <div class="modal fade" id="modalEngagement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details" style="padding-top:0;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="portfolio-details-slider swiper">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/1.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="modal-title me-4" id="exampleModalLabel">Paket Engagement</h5>
                                            <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                            <div class="list-group flex-row mt-4" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage active" id="list-controller-engagement-0" data-bs-toggle="list" href="#list-engagement-0" role="tab" aria-controls="list-engagement-0">STANDARD PACKAGE PHOTO</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-engagement-1" data-bs-toggle="list" href="#list-engagement-1" role="tab" aria-controls="list-engagement-1">GLAMOUR PACKAGE PHOTO + VIDEO</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php foreach ($paketsEngagement as $key => $paketEngagement) : ?>
                                                    <div class="tab-pane fade show <?php if ($key == 0) {
                                                                                        echo 'active';
                                                                                    } ?>" id="list-engagement-<?= $key ?>" role="tabpanel" aria-labelledby="list-engagement-<?= $key ?>">
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Harga </strong>:
                                                                        <?=
                                                                        helper('number');
                                                                        echo number_to_currency($paketEngagement->harga_paket, 'IDR', 'id_ID');
                                                                        ?>
                                                                    </li>
                                                                    <li><strong>Tenaga Kerja </strong>:

                                                                        <?php if ($paketEngagement->fotografer != 0) {
                                                                            echo $paketEngagement->fotografer ?>
                                                                            Fotografer
                                                                            <?php if ($paketEngagement->videografer != 0) { ?>
                                                                                <?= $paketEngagement->videografer ?> Videografer
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <?php if ($paketEngagement->asisten != 0) {
                                                                            echo $paketEngagement->asisten ?>
                                                                            Asisten
                                                                        <?php } ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Waktu kerja </strong>:
                                                                        <?= $paketEngagement->waktu_kerja; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto </strong>:
                                                                        <?= $paketEngagement->jumlah_foto; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto edit </strong>:
                                                                        <?= $paketEngagement->jumlah_foto_edit; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Cetak </strong>:
                                                                        <?= $paketEngagement->cetak_foto; ?>
                                                                    </li>
                                                                    <?php if ($paketEngagement->videografi != '') { ?>
                                                                        <li>
                                                                            <strong>Videografi </strong>:
                                                                            <?= $paketEngagement->videografi; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Penyimpanan </strong>:
                                                                        <?= $paketEngagement->penyimpanan; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Deskripsi Paket </strong>:
                                                                        <?= $paketEngagement->deskripsi_paket; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="portfolio-description">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <a href="#" id="pesanSekarangEngagement<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="pesanTextEngagement<?= $key ?>">Pesan Sekarang</span>
                                                                                <div id="pesanLoadingEngagement<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="#" id="masukkanKeranjangEngagement<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="keranjangTextEngagement<?= $key ?>">Masukkan Keranjang</span>
                                                                                <div id="keranjangLoadingEngagement<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="https://wa.me/6285156443674" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                Konsultasi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- js untuk pesanan -->
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#pesanSekarangEngagement<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var pesanText = document.getElementById("pesanTextEngagement<?= $key ?>");
                                                                var pesanLoading = document.getElementById("pesanLoadingEngagement<?= $key ?>");

                                                                pesanText.classList.add("d-none");
                                                                pesanLoading.classList.remove("d-none");

                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketEngagement->id_paket ?>,
                                                                                    type: 'pesan',
                                                                                },
                                                                                success: function(response) {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                    window.location.href = '<?= base_url('/checkout') ?>';
                                                                                },
                                                                                error: function() {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        pesanText.classList.remove("d-none");
                                                                        pesanLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                            $('#masukkanKeranjangEngagement<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var keranjangText = document.getElementById("keranjangTextEngagement<?= $key ?>");
                                                                var keranjangLoading = document.getElementById("keranjangLoadingEngagement<?= $key ?>");

                                                                keranjangText.classList.add("d-none");
                                                                keranjangLoading.classList.remove("d-none");

                                                                const anchorBtn = document.getElementById('masukkanKeranjangEngagement<?= $key ?>');
                                                                anchorBtn.disabled = true;
                                                                // perform AJAX request here
                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketEngagement->id_paket ?>,
                                                                                    type: 'keranjang',
                                                                                },
                                                                                success: function(response) {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                },
                                                                                error: function() {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        keranjangText.classList.remove("d-none");
                                                                        keranjangLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Portfolio Details Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Prewedding Indoor -->
    <div class="modal fade" id="modalPreweddingIndoor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details" style="padding-top:0;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="portfolio-details-slider swiper">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/1.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="modal-title me-4" id="exampleModalLabel">Paket Prewedding Indoor</h5>
                                            <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                            <div class="list-group flex-row mt-4" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage active" id="list-controller-prewedding-indoor-0" data-bs-toggle="list" href="#list-prewedding-indoor-0" role="tab" aria-controls="list-prewedding-indoor-0">PACKAGE INDOOR</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php foreach ($paketsPreweddingIndoor as $key => $paketPreweddingIndoor) : ?>
                                                    <div class="tab-pane fade show <?php if ($key == 0) {
                                                                                        echo 'active';
                                                                                    } ?>" id="list-prewedding-indoor-<?= $key ?>" role="tabpanel" aria-labelledby="list-prewedding-indoor-<?= $key ?>">
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Harga </strong>:
                                                                        <?=
                                                                        helper('number');
                                                                        echo number_to_currency($paketPreweddingIndoor->harga_paket, 'IDR', 'id_ID');
                                                                        ?>
                                                                    </li>
                                                                    <li><strong>Tenaga Kerja </strong>:

                                                                        <?php if ($paketPreweddingIndoor->fotografer != 0) {
                                                                            echo $paketPreweddingIndoor->fotografer ?>
                                                                            Fotografer
                                                                            <?php if ($paketPreweddingIndoor->videografer != 0) { ?>
                                                                                <?= $paketPreweddingIndoor->videografer ?> Videografer
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <?php if ($paketPreweddingIndoor->asisten != 0) {
                                                                            echo $paketPreweddingIndoor->asisten ?>
                                                                            Asisten
                                                                        <?php } ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Waktu kerja </strong>:
                                                                        <?= $paketPreweddingIndoor->waktu_kerja; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto </strong>:
                                                                        <?= $paketPreweddingIndoor->jumlah_foto; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto edit </strong>:
                                                                        <?= $paketPreweddingIndoor->jumlah_foto_edit; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Cetak </strong>:
                                                                        <?= $paketPreweddingIndoor->cetak_foto; ?>
                                                                    </li>
                                                                    <?php if ($paketPreweddingIndoor->videografi != '') { ?>
                                                                        <li>
                                                                            <strong>Videografi </strong>:
                                                                            <?= $paketPreweddingIndoor->videografi; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Penyimpanan </strong>:
                                                                        <?= $paketPreweddingIndoor->penyimpanan; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Deskripsi Paket </strong>:
                                                                        <?= $paketPreweddingIndoor->deskripsi_paket; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="portfolio-description">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <a href="#" id="pesanSekarangPreweddingIndoor<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="pesanTextPreweddingIndoor<?= $key ?>">Pesan Sekarang</span>
                                                                                <div id="pesanLoadingPreweddingIndoor<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="#" id="masukkanKeranjangPreweddingIndoor<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="keranjangTextPreweddingIndoor<?= $key ?>">Masukkan Keranjang</span>
                                                                                <div id="keranjangLoadingPreweddingIndoor<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="https://wa.me/6285156443674" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                Konsultasi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- js untuk pesanan -->
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#pesanSekarangPreweddingIndoor<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var pesanText = document.getElementById("pesanTextPreweddingIndoor<?= $key ?>");
                                                                var pesanLoading = document.getElementById("pesanLoadingPreweddingIndoor<?= $key ?>");

                                                                pesanText.classList.add("d-none");
                                                                pesanLoading.classList.remove("d-none");

                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketPreweddingIndoor->id_paket ?>,
                                                                                    type: 'pesan',
                                                                                },
                                                                                success: function(response) {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                    window.location.href = '<?= base_url('/checkout') ?>';
                                                                                },
                                                                                error: function() {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        pesanText.classList.remove("d-none");
                                                                        pesanLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                            $('#masukkanKeranjangPreweddingIndoor<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var keranjangText = document.getElementById("keranjangTextPreweddingIndoor<?= $key ?>");
                                                                var keranjangLoading = document.getElementById("keranjangLoadingPreweddingIndoor<?= $key ?>");

                                                                keranjangText.classList.add("d-none");
                                                                keranjangLoading.classList.remove("d-none");

                                                                const anchorBtn = document.getElementById('masukkanKeranjangPreweddingIndoor<?= $key ?>');
                                                                anchorBtn.disabled = true;
                                                                // perform AJAX request here
                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketPreweddingIndoor->id_paket ?>,
                                                                                    type: 'keranjang',
                                                                                },
                                                                                success: function(response) {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                },
                                                                                error: function() {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        keranjangText.classList.remove("d-none");
                                                                        keranjangLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Portfolio Details Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Prewedding Outdoor -->
    <div class="modal fade" id="modalPreweddingOutdoor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details" style="padding-top:0;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="portfolio-details-slider swiper">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/1.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="modal-title me-4" id="exampleModalLabel">Paket Prewedding Outdoor</h5>
                                            <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                            <div class="list-group flex-row mt-4" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage active" id="list-controller-prewedding-outdoor-0" data-bs-toggle="list" href="#list-prewedding-outdoor-0" role="tab" aria-controls="list-prewedding-outdoor-0">OUTDOOR PACKAGE A PHOTO</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-prewedding-outdoor-1" data-bs-toggle="list" href="#list-prewedding-outdoor-1" role="tab" aria-controls="list-prewedding-outdoor-1">OUTDOOR PACKAGE B PHOTO </a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-prewedding-outdoor-2" data-bs-toggle="list" href="#list-prewedding-outdoor-2" role="tab" aria-controls="list-prewedding-outdoor-2">OUTDOOR PACKAGE C PHOTO + VIDEO</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-prewedding-outdoor-3" data-bs-toggle="list" href="#list-prewedding-outdoor-3" role="tab" aria-controls="list-prewedding-outdoor-3">OUTDOOR PACKAGE D PHOTO + VIDEO</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php foreach ($paketsPreweddingOutdoor as $key => $paketPreweddingOutdoor) : ?>
                                                    <div class="tab-pane fade show <?php if ($key == 0) {
                                                                                        echo 'active';
                                                                                    } ?>" id="list-prewedding-outdoor-<?= $key ?>" role="tabpanel" aria-labelledby="list-prewedding-outdoor-<?= $key ?>">
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Harga </strong>:
                                                                        <?=
                                                                        helper('number');
                                                                        echo number_to_currency($paketPreweddingOutdoor->harga_paket, 'IDR', 'id_ID');
                                                                        ?>
                                                                    </li>
                                                                    <li><strong>Tenaga Kerja </strong>:

                                                                        <?php if ($paketPreweddingOutdoor->fotografer != 0) {
                                                                            echo $paketPreweddingOutdoor->fotografer ?>
                                                                            Fotografer
                                                                            <?php if ($paketPreweddingOutdoor->videografer != 0) { ?>
                                                                                <?= $paketPreweddingOutdoor->videografer ?> Videografer
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <?php if ($paketPreweddingOutdoor->asisten != 0) {
                                                                            echo $paketPreweddingOutdoor->asisten ?>
                                                                            Asisten
                                                                        <?php } ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Waktu kerja </strong>:
                                                                        <?= $paketPreweddingOutdoor->waktu_kerja; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto </strong>:
                                                                        <?= $paketPreweddingOutdoor->jumlah_foto; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto edit </strong>:
                                                                        <?= $paketPreweddingOutdoor->jumlah_foto_edit; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Cetak </strong>:
                                                                        <?= $paketPreweddingOutdoor->cetak_foto; ?>
                                                                    </li>
                                                                    <?php if ($paketPreweddingOutdoor->videografi != '') { ?>
                                                                        <li>
                                                                            <strong>Videografi </strong>:
                                                                            <?= $paketPreweddingOutdoor->videografi; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Penyimpanan </strong>:
                                                                        <?= $paketPreweddingOutdoor->penyimpanan; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Deskripsi Paket </strong>:
                                                                        <?= $paketPreweddingOutdoor->deskripsi_paket; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="portfolio-description">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <a href="#" id="pesanSekarangPreweddingOutdoor<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="pesanTextPreweddingOutdoor<?= $key ?>">Pesan Sekarang</span>
                                                                                <div id="pesanLoadingPreweddingOutdoor<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="#" id="masukkanKeranjangPreweddingOutdoor<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="keranjangTextPreweddingOutdoor<?= $key ?>">Masukkan Keranjang</span>
                                                                                <div id="keranjangLoadingPreweddingOutdoor<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="https://wa.me/6285156443674" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                Konsultasi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- js untuk pesanan -->
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#pesanSekarangPreweddingOutdoor<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var pesanText = document.getElementById("pesanTextPreweddingOutdoor<?= $key ?>");
                                                                var pesanLoading = document.getElementById("pesanLoadingPreweddingOutdoor<?= $key ?>");

                                                                pesanText.classList.add("d-none");
                                                                pesanLoading.classList.remove("d-none");

                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketPreweddingOutdoor->id_paket ?>,
                                                                                    type: 'pesan',
                                                                                },
                                                                                success: function(response) {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                    window.location.href = '<?= base_url('/checkout') ?>';
                                                                                },
                                                                                error: function() {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        pesanText.classList.remove("d-none");
                                                                        pesanLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                            $('#masukkanKeranjangPreweddingOutdoor<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var keranjangText = document.getElementById("keranjangTextPreweddingOutdoor<?= $key ?>");
                                                                var keranjangLoading = document.getElementById("keranjangLoadingPreweddingOutdoor<?= $key ?>");

                                                                keranjangText.classList.add("d-none");
                                                                keranjangLoading.classList.remove("d-none");

                                                                const anchorBtn = document.getElementById('masukkanKeranjangPreweddingOutdoor<?= $key ?>');
                                                                anchorBtn.disabled = true;
                                                                // perform AJAX request here
                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketPreweddingOutdoor->id_paket ?>,
                                                                                    type: 'keranjang',
                                                                                },
                                                                                success: function(response) {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                },
                                                                                error: function() {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        keranjangText.classList.remove("d-none");
                                                                        keranjangLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Portfolio Details Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Maternity -->
    <div class="modal fade" id="modalMaternity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details" style="padding-top:0;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="portfolio-details-slider swiper">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/9.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="modal-title me-4" id="exampleModalLabel">Paket maternity</h5>
                                            <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                            <div class="list-group flex-row mt-4" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage active" id="list-controller-maternity-0" data-bs-toggle="list" href="#list-maternity-0" role="tab" aria-controls="list-maternity-0">MATERNITY PACKAGE</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php foreach ($paketsMaternity as $key => $paketMaternity) : ?>
                                                    <div class="tab-pane fade show <?php if ($key == 0) {
                                                                                        echo 'active';
                                                                                    } ?>" id="list-maternity-<?= $key ?>" role="tabpanel" aria-labelledby="list-maternity-<?= $key ?>">
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Harga </strong>:
                                                                        <?=
                                                                        helper('number');
                                                                        echo number_to_currency($paketMaternity->harga_paket, 'IDR', 'id_ID');
                                                                        ?>
                                                                    </li>
                                                                    <li><strong>Tenaga Kerja </strong>:

                                                                        <?php if ($paketMaternity->fotografer != 0) {
                                                                            echo $paketMaternity->fotografer ?>
                                                                            Fotografer
                                                                            <?php if ($paketMaternity->videografer != 0) { ?>
                                                                                <?= $paketMaternity->videografer ?> Videografer
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <?php if ($paketMaternity->asisten != 0) {
                                                                            echo $paketMaternity->asisten ?>
                                                                            Asisten
                                                                        <?php } ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Waktu kerja </strong>:
                                                                        <?= $paketMaternity->waktu_kerja; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto </strong>:
                                                                        <?= $paketMaternity->jumlah_foto; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto edit </strong>:
                                                                        <?= $paketMaternity->jumlah_foto_edit; ?>
                                                                    </li>
                                                                    <?php if ($paketMaternity->cetak_foto != '') { ?>
                                                                        <li>
                                                                            <strong>Cetak </strong>:
                                                                            <?= $paketMaternity->cetak_foto; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <?php if ($paketMaternity->videografi != '') { ?>
                                                                        <li>
                                                                            <strong>Videografi </strong>:
                                                                            <?= $paketMaternity->videografi; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Penyimpanan </strong>:
                                                                        <?= $paketMaternity->penyimpanan; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Deskripsi Paket </strong>:
                                                                        <?= $paketMaternity->deskripsi_paket; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="portfolio-description">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <a href="#" id="pesanSekarangMaternity<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="pesanTextMaternity<?= $key ?>">Pesan Sekarang</span>
                                                                                <div id="pesanLoadingMaternity<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="#" id="masukkanKeranjangMaternity<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="keranjangTextMaternity<?= $key ?>">Masukkan Keranjang</span>
                                                                                <div id="keranjangLoadingMaternity<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="https://wa.me/6285156443674" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                Konsultasi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- js untuk pesanan -->
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#pesanSekarangMaternity<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var pesanText = document.getElementById("pesanTextMaternity<?= $key ?>");
                                                                var pesanLoading = document.getElementById("pesanLoadingMaternity<?= $key ?>");

                                                                pesanText.classList.add("d-none");
                                                                pesanLoading.classList.remove("d-none");

                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketMaternity->id_paket ?>,
                                                                                    type: 'pesan',
                                                                                },
                                                                                success: function(response) {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                    window.location.href = '<?= base_url('/checkout') ?>';
                                                                                },
                                                                                error: function() {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        pesanText.classList.remove("d-none");
                                                                        pesanLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                            $('#masukkanKeranjangMaternity<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var keranjangText = document.getElementById("keranjangTextMaternity<?= $key ?>");
                                                                var keranjangLoading = document.getElementById("keranjangLoadingMaternity<?= $key ?>");

                                                                keranjangText.classList.add("d-none");
                                                                keranjangLoading.classList.remove("d-none");

                                                                const anchorBtn = document.getElementById('masukkanKeranjangMaternity<?= $key ?>');
                                                                anchorBtn.disabled = true;
                                                                // perform AJAX request here
                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketMaternity->id_paket ?>,
                                                                                    type: 'keranjang',
                                                                                },
                                                                                success: function(response) {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                },
                                                                                error: function() {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        keranjangText.classList.remove("d-none");
                                                                        keranjangLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Portfolio Details Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Family -->
    <div class="modal fade" id="modalFamily" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details" style="padding-top:0;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="portfolio-details-slider swiper">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/7.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="modal-title me-4" id="exampleModalLabel">Paket Family (Indoor Only)</h5>
                                            <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                            <div class="list-group flex-row mt-4" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage active" id="list-controller-family-0" data-bs-toggle="list" href="#list-family-0" role="tab" aria-controls="list-family-0">FAMILY PACKAGE</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php foreach ($paketsFamily as $key => $paketFamily) : ?>
                                                    <div class="tab-pane fade show <?php if ($key == 0) {
                                                                                        echo 'active';
                                                                                    } ?>" id="list-family-<?= $key ?>" role="tabpanel" aria-labelledby="list-family-<?= $key ?>">
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Harga </strong>:
                                                                        <?=
                                                                        helper('number');
                                                                        echo number_to_currency($paketFamily->harga_paket, 'IDR', 'id_ID');
                                                                        ?>
                                                                    </li>
                                                                    <li><strong>Tenaga Kerja </strong>:

                                                                        <?php if ($paketFamily->fotografer != 0) {
                                                                            echo $paketFamily->fotografer ?>
                                                                            Fotografer
                                                                            <?php if ($paketFamily->videografer != 0) { ?>
                                                                                <?= $paketFamily->videografer ?> Videografer
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <?php if ($paketFamily->asisten != 0) {
                                                                            echo $paketFamily->asisten ?>
                                                                            Asisten
                                                                        <?php } ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Waktu kerja </strong>:
                                                                        <?= $paketFamily->waktu_kerja; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto </strong>:
                                                                        <?= $paketFamily->jumlah_foto; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto edit </strong>:
                                                                        <?= $paketFamily->jumlah_foto_edit; ?>
                                                                    </li>
                                                                    <?php if ($paketFamily->cetak_foto != '') { ?>
                                                                        <li>
                                                                            <strong>Cetak </strong>:
                                                                            <?= $paketFamily->cetak_foto; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <?php if ($paketFamily->videografi != '') { ?>
                                                                        <li>
                                                                            <strong>Videografi </strong>:
                                                                            <?= $paketFamily->videografi; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Penyimpanan </strong>:
                                                                        <?= $paketFamily->penyimpanan; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Deskripsi Paket </strong>:
                                                                        <?= $paketFamily->deskripsi_paket; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="portfolio-description">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <a href="#" id="pesanSekarangFamily<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="pesanTextFamily<?= $key ?>">Pesan Sekarang</span>
                                                                                <div id="pesanLoadingFamily<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="#" id="masukkanKeranjangFamily<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="keranjangTextFamily<?= $key ?>">Masukkan Keranjang</span>
                                                                                <div id="keranjangLoadingFamily<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="https://wa.me/6285156443674" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                Konsultasi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- js untuk pesanan -->
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#pesanSekarangFamily<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var pesanText = document.getElementById("pesanTextFamily<?= $key ?>");
                                                                var pesanLoading = document.getElementById("pesanLoadingFamily<?= $key ?>");

                                                                pesanText.classList.add("d-none");
                                                                pesanLoading.classList.remove("d-none");

                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketFamily->id_paket ?>,
                                                                                    type: 'pesan',
                                                                                },
                                                                                success: function(response) {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                    window.location.href = '<?= base_url('/checkout') ?>';
                                                                                },
                                                                                error: function() {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        pesanText.classList.remove("d-none");
                                                                        pesanLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                            $('#masukkanKeranjangFamily<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var keranjangText = document.getElementById("keranjangTextFamily<?= $key ?>");
                                                                var keranjangLoading = document.getElementById("keranjangLoadingFamily<?= $key ?>");

                                                                keranjangText.classList.add("d-none");
                                                                keranjangLoading.classList.remove("d-none");

                                                                const anchorBtn = document.getElementById('masukkanKeranjangFamily<?= $key ?>');
                                                                anchorBtn.disabled = true;
                                                                // perform AJAX request here
                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketFamily->id_paket ?>,
                                                                                    type: 'keranjang',
                                                                                },
                                                                                success: function(response) {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                },
                                                                                error: function() {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        keranjangText.classList.remove("d-none");
                                                                        keranjangLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Portfolio Details Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Group -->
    <div class="modal fade" id="modalGroup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details" style="padding-top:0;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="portfolio-details-slider swiper">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/8.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="modal-title me-4" id="exampleModalLabel">Paket Group</h5>
                                            <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                            <div class="list-group flex-row mt-4" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage active" id="list-controller-group-0" data-bs-toggle="list" href="#list-group-0" role="tab" aria-controls="list-group-0">GROUP PACKAGE INDOOR</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-group-1" data-bs-toggle="list" href="#list-group-1" role="tab" aria-controls="list-group-1">GROUP PACKAGE OUTDOOR</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php foreach ($paketsGroup as $key => $paketGroup) : ?>
                                                    <div class="tab-pane fade show <?php if ($key == 0) {
                                                                                        echo 'active';
                                                                                    } ?>" id="list-group-<?= $key ?>" role="tabpanel" aria-labelledby="list-group-<?= $key ?>">
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Harga </strong>:
                                                                        <?=
                                                                        helper('number');
                                                                        echo number_to_currency($paketGroup->harga_paket, 'IDR', 'id_ID');
                                                                        ?>
                                                                    </li>
                                                                    <li><strong>Tenaga Kerja </strong>:

                                                                        <?php if ($paketGroup->fotografer != 0) {
                                                                            echo $paketGroup->fotografer ?>
                                                                            Fotografer
                                                                            <?php if ($paketGroup->videografer != 0) { ?>
                                                                                <?= $paketGroup->videografer ?> Videografer
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <?php if ($paketGroup->asisten != 0) {
                                                                            echo $paketGroup->asisten ?>
                                                                            Asisten
                                                                        <?php } ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Waktu kerja </strong>:
                                                                        <?= $paketGroup->waktu_kerja; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto </strong>:
                                                                        <?= $paketGroup->jumlah_foto; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto edit </strong>:
                                                                        <?= $paketGroup->jumlah_foto_edit; ?>
                                                                    </li>
                                                                    <?php if ($paketGroup->cetak_foto != '') { ?>
                                                                        <li>
                                                                            <strong>Cetak </strong>:
                                                                            <?= $paketGroup->cetak_foto; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <?php if ($paketGroup->videografi != '') { ?>
                                                                        <li>
                                                                            <strong>Videografi </strong>:
                                                                            <?= $paketGroup->videografi; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Penyimpanan </strong>:
                                                                        <?= $paketGroup->penyimpanan; ?>
                                                                    </li>
                                                                    <?php if ($paketGroup->id_paket == 17) { ?>
                                                                        <li>
                                                                            <strong>Catatan </strong>:
                                                                            Minimal 4 orang
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Deskripsi Paket </strong>:
                                                                        <?= $paketGroup->deskripsi_paket; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="portfolio-description">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <a href="#" id="pesanSekarangGroup<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="pesanTextGroup<?= $key ?>">Pesan Sekarang</span>
                                                                                <div id="pesanLoadingGroup<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="#" id="masukkanKeranjangGroup<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="keranjangTextGroup<?= $key ?>">Masukkan Keranjang</span>
                                                                                <div id="keranjangLoadingGroup<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="https://wa.me/6285156443674" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                Konsultasi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- js untuk pesanan -->
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#pesanSekarangGroup<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var pesanText = document.getElementById("pesanTextGroup<?= $key ?>");
                                                                var pesanLoading = document.getElementById("pesanLoadingGroup<?= $key ?>");

                                                                pesanText.classList.add("d-none");
                                                                pesanLoading.classList.remove("d-none");

                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketGroup->id_paket ?>,
                                                                                    type: 'pesan',
                                                                                },
                                                                                success: function(response) {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                    window.location.href = '<?= base_url('/checkout') ?>';
                                                                                },
                                                                                error: function() {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        pesanText.classList.remove("d-none");
                                                                        pesanLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                            $('#masukkanKeranjangGroup<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var keranjangText = document.getElementById("keranjangTextGroup<?= $key ?>");
                                                                var keranjangLoading = document.getElementById("keranjangLoadingGroup<?= $key ?>");

                                                                keranjangText.classList.add("d-none");
                                                                keranjangLoading.classList.remove("d-none");

                                                                const anchorBtn = document.getElementById('masukkanKeranjangGroup<?= $key ?>');
                                                                anchorBtn.disabled = true;
                                                                // perform AJAX request here
                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketGroup->id_paket ?>,
                                                                                    type: 'keranjang',
                                                                                },
                                                                                success: function(response) {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                },
                                                                                error: function() {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        keranjangText.classList.remove("d-none");
                                                                        keranjangLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Portfolio Details Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Event -->
    <div class="modal fade" id="modalEvent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details" style="padding-top:0;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="portfolio-details-slider swiper">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/12.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="modal-title me-4" id="exampleModalLabel">Paket Event (Outdoor Only)</h5>
                                            <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                            <div class="list-group flex-row mt-4" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage active" id="list-controller-event-0" data-bs-toggle="list" href="#list-event-0" role="tab" aria-controls="list-event-0">EVENT PACKAGE</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php foreach ($paketsEvent as $key => $paketEvent) : ?>
                                                    <div class="tab-pane fade show <?php if ($key == 0) {
                                                                                        echo 'active';
                                                                                    } ?>" id="list-event-<?= $key ?>" role="tabpanel" aria-labelledby="list-event-<?= $key ?>">
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Harga </strong>:
                                                                        <?=
                                                                        helper('number');
                                                                        echo number_to_currency($paketEvent->harga_paket, 'IDR', 'id_ID');
                                                                        ?>
                                                                    </li>
                                                                    <li><strong>Tenaga Kerja </strong>:

                                                                        <?php if ($paketEvent->fotografer != 0) {
                                                                            echo $paketEvent->fotografer ?>
                                                                            Fotografer
                                                                            <?php if ($paketEvent->videografer != 0) { ?>
                                                                                <?= $paketEvent->videografer ?> Videografer
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <?php if ($paketEvent->asisten != 0) {
                                                                            echo $paketEvent->asisten ?>
                                                                            Asisten
                                                                        <?php } ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Waktu kerja </strong>:
                                                                        <?= $paketEvent->waktu_kerja; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto </strong>:
                                                                        <?= $paketEvent->jumlah_foto; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto edit </strong>:
                                                                        <?= $paketEvent->jumlah_foto_edit; ?>
                                                                    </li>
                                                                    <?php if ($paketEvent->cetak_foto != '') { ?>
                                                                        <li>
                                                                            <strong>Cetak </strong>:
                                                                            <?= $paketEvent->cetak_foto; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <?php if ($paketEvent->videografi != '') { ?>
                                                                        <li>
                                                                            <strong>Videografi </strong>:
                                                                            <?= $paketEvent->videografi; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Penyimpanan </strong>:
                                                                        <?= $paketEvent->penyimpanan; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Deskripsi Paket </strong>:
                                                                        <?= $paketEvent->deskripsi_paket; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="portfolio-description">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <a href="#" id="pesanSekarangEvent<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="pesanTextEvent<?= $key ?>">Pesan Sekarang</span>
                                                                                <div id="pesanLoadingEvent<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="#" id="masukkanKeranjangEvent<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="keranjangTextEvent<?= $key ?>">Masukkan Keranjang</span>
                                                                                <div id="keranjangLoadingEvent<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="https://wa.me/6285156443674" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                Konsultasi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- js untuk pesanan -->
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#pesanSekarangEvent<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var pesanText = document.getElementById("pesanTextEvent<?= $key ?>");
                                                                var pesanLoading = document.getElementById("pesanLoadingEvent<?= $key ?>");

                                                                pesanText.classList.add("d-none");
                                                                pesanLoading.classList.remove("d-none");

                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketEvent->id_paket ?>,
                                                                                    type: 'pesan',
                                                                                },
                                                                                success: function(response) {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                    window.location.href = '<?= base_url('/checkout') ?>';
                                                                                },
                                                                                error: function() {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        pesanText.classList.remove("d-none");
                                                                        pesanLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                            $('#masukkanKeranjangEvent<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var keranjangText = document.getElementById("keranjangTextEvent<?= $key ?>");
                                                                var keranjangLoading = document.getElementById("keranjangLoadingEvent<?= $key ?>");

                                                                keranjangText.classList.add("d-none");
                                                                keranjangLoading.classList.remove("d-none");

                                                                const anchorBtn = document.getElementById('masukkanKeranjangEvent<?= $key ?>');
                                                                anchorBtn.disabled = true;
                                                                // perform AJAX request here
                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketEvent->id_paket ?>,
                                                                                    type: 'keranjang',
                                                                                },
                                                                                success: function(response) {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                },
                                                                                error: function() {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        keranjangText.classList.remove("d-none");
                                                                        keranjangLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Portfolio Details Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Couple -->
    <div class="modal fade" id="modalCouple" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details" style="padding-top:0;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="portfolio-details-slider swiper">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="modal-title me-4" id="exampleModalLabel">Paket Couple (Indoor Only)</h5>
                                            <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                            <div class="list-group flex-row mt-4" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage active" id="list-controller-couple-0" data-bs-toggle="list" href="#list-couple-0" role="tab" aria-controls="list-couple-0">COUPLE PACKAGE</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php foreach ($paketsCouple as $key => $paketCouple) : ?>
                                                    <div class="tab-pane fade show <?php if ($key == 0) {
                                                                                        echo 'active';
                                                                                    } ?>" id="list-couple-<?= $key ?>" role="tabpanel" aria-labelledby="list-couple-<?= $key ?>">
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Harga </strong>:
                                                                        <?=
                                                                        helper('number');
                                                                        echo number_to_currency($paketCouple->harga_paket, 'IDR', 'id_ID');
                                                                        ?>
                                                                    </li>
                                                                    <li><strong>Tenaga Kerja </strong>:

                                                                        <?php if ($paketCouple->fotografer != 0) {
                                                                            echo $paketCouple->fotografer ?>
                                                                            Fotografer
                                                                            <?php if ($paketCouple->videografer != 0) { ?>
                                                                                <?= $paketCouple->videografer ?> Videografer
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <?php if ($paketCouple->asisten != 0) {
                                                                            echo $paketCouple->asisten ?>
                                                                            Asisten
                                                                        <?php } ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Waktu kerja </strong>:
                                                                        <?= $paketCouple->waktu_kerja; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto </strong>:
                                                                        <?= $paketCouple->jumlah_foto; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto edit </strong>:
                                                                        <?= $paketCouple->jumlah_foto_edit; ?>
                                                                    </li>
                                                                    <?php if ($paketCouple->cetak_foto != '') { ?>
                                                                        <li>
                                                                            <strong>Cetak </strong>:
                                                                            <?= $paketCouple->cetak_foto; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <?php if ($paketCouple->videografi != '') { ?>
                                                                        <li>
                                                                            <strong>Videografi </strong>:
                                                                            <?= $paketCouple->videografi; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Penyimpanan </strong>:
                                                                        <?= $paketCouple->penyimpanan; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Deskripsi Paket </strong>:
                                                                        <?= $paketCouple->deskripsi_paket; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="portfolio-description">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <a href="#" id="pesanSekarangCouple<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="pesanTextCouple<?= $key ?>">Pesan Sekarang</span>
                                                                                <div id="pesanLoadingCouple<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="#" id="masukkanKeranjangCouple<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="keranjangTextCouple<?= $key ?>">Masukkan Keranjang</span>
                                                                                <div id="keranjangLoadingCouple<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="https://wa.me/6285156443674" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                Konsultasi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- js untuk pesanan -->
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#pesanSekarangCouple<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var pesanText = document.getElementById("pesanTextCouple<?= $key ?>");
                                                                var pesanLoading = document.getElementById("pesanLoadingCouple<?= $key ?>");

                                                                pesanText.classList.add("d-none");
                                                                pesanLoading.classList.remove("d-none");

                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketCouple->id_paket ?>,
                                                                                    type: 'pesan',
                                                                                },
                                                                                success: function(response) {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                    window.location.href = '<?= base_url('/checkout') ?>';
                                                                                },
                                                                                error: function() {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        pesanText.classList.remove("d-none");
                                                                        pesanLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                            $('#masukkanKeranjangCouple<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var keranjangText = document.getElementById("keranjangTextCouple<?= $key ?>");
                                                                var keranjangLoading = document.getElementById("keranjangLoadingCouple<?= $key ?>");

                                                                keranjangText.classList.add("d-none");
                                                                keranjangLoading.classList.remove("d-none");

                                                                const anchorBtn = document.getElementById('masukkanKeranjangCouple<?= $key ?>');
                                                                anchorBtn.disabled = true;
                                                                // perform AJAX request here
                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketCouple->id_paket ?>,
                                                                                    type: 'keranjang',
                                                                                },
                                                                                success: function(response) {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                },
                                                                                error: function() {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        keranjangText.classList.remove("d-none");
                                                                        keranjangLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Portfolio Details Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Personal -->
    <div class="modal fade" id="modalPersonal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details" style="padding-top:0;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="portfolio-details-slider swiper">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/81403446_2894840617213830_4781872265253812536_n.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="modal-title me-4" id="exampleModalLabel">Paket Personal</h5>
                                            <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                            <div class="list-group flex-row mt-4" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage active" id="list-controller-personal-0" data-bs-toggle="list" href="#list-personal-0" role="tab" aria-controls="list-personal-0">PERSONAL PACKAGE INDOOR</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-personal-1" data-bs-toggle="list" href="#list-personal-1" role="tab" aria-controls="list-personal-1">PERSONAL PACKAGE OUTDOOR</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php foreach ($paketsPersonal as $key => $paketPersonal) : ?>
                                                    <div class="tab-pane fade show <?php if ($key == 0) {
                                                                                        echo 'active';
                                                                                    } ?>" id="list-personal-<?= $key ?>" role="tabpanel" aria-labelledby="list-personal-<?= $key ?>">
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Harga </strong>:
                                                                        <?=
                                                                        helper('number');
                                                                        echo number_to_currency($paketPersonal->harga_paket, 'IDR', 'id_ID');
                                                                        ?>
                                                                    </li>
                                                                    <li><strong>Tenaga Kerja </strong>:

                                                                        <?php if ($paketPersonal->fotografer != 0) {
                                                                            echo $paketPersonal->fotografer ?>
                                                                            Fotografer
                                                                            <?php if ($paketPersonal->videografer != 0) { ?>
                                                                                <?= $paketPersonal->videografer ?> Videografer
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <?php if ($paketPersonal->asisten != 0) {
                                                                            echo $paketPersonal->asisten ?>
                                                                            Asisten
                                                                        <?php } ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Waktu kerja </strong>:
                                                                        <?= $paketPersonal->waktu_kerja; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto </strong>:
                                                                        <?= $paketPersonal->jumlah_foto; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto edit </strong>:
                                                                        <?= $paketPersonal->jumlah_foto_edit; ?>
                                                                    </li>
                                                                    <?php if ($paketPersonal->cetak_foto != '') { ?>
                                                                        <li>
                                                                            <strong>Cetak </strong>:
                                                                            <?= $paketPersonal->cetak_foto; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <?php if ($paketPersonal->videografi != '') { ?>
                                                                        <li>
                                                                            <strong>Videografi </strong>:
                                                                            <?= $paketPersonal->videografi; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Penyimpanan </strong>:
                                                                        <?= $paketPersonal->penyimpanan; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Deskripsi Paket </strong>:
                                                                        <?= $paketPersonal->deskripsi_paket; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="portfolio-description">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <a href="#" id="pesanSekarangPersonal<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="pesanTextPersonal<?= $key ?>">Pesan Sekarang</span>
                                                                                <div id="pesanLoadingPersonal<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="#" id="masukkanKeranjangPersonal<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="keranjangTextPersonal<?= $key ?>">Masukkan Keranjang</span>
                                                                                <div id="keranjangLoadingPersonal<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="https://wa.me/6285156443674" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                Konsultasi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- js untuk pesanan -->
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#pesanSekarangPersonal<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var pesanText = document.getElementById("pesanTextPersonal<?= $key ?>");
                                                                var pesanLoading = document.getElementById("pesanLoadingPersonal<?= $key ?>");

                                                                pesanText.classList.add("d-none");
                                                                pesanLoading.classList.remove("d-none");

                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketPersonal->id_paket ?>,
                                                                                    type: 'pesan',
                                                                                },
                                                                                success: function(response) {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                    window.location.href = '<?= base_url('/checkout') ?>';
                                                                                },
                                                                                error: function() {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        pesanText.classList.remove("d-none");
                                                                        pesanLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                            $('#masukkanKeranjangPersonal<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var keranjangText = document.getElementById("keranjangTextPersonal<?= $key ?>");
                                                                var keranjangLoading = document.getElementById("keranjangLoadingPersonal<?= $key ?>");

                                                                keranjangText.classList.add("d-none");
                                                                keranjangLoading.classList.remove("d-none");

                                                                const anchorBtn = document.getElementById('masukkanKeranjangPersonal<?= $key ?>');
                                                                anchorBtn.disabled = true;
                                                                // perform AJAX request here
                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketPersonal->id_paket ?>,
                                                                                    type: 'keranjang',
                                                                                },
                                                                                success: function(response) {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                },
                                                                                error: function() {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        keranjangText.classList.remove("d-none");
                                                                        keranjangLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Portfolio Details Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Graduation Indoor -->
    <div class="modal fade" id="modalGraduationIndoor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details" style="padding-top:0;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="portfolio-details-slider swiper">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/10.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/14.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="modal-title me-4" id="exampleModalLabel">Paket Graduation Indoor</h5>
                                            <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                            <div class="list-group flex-row mt-4" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage active" id="list-controller-graduation-indoor-0" data-bs-toggle="list" href="#list-graduation-indoor-0" role="tab" aria-controls="list-graduation-indoor-0">GRADUATION PACKAGE INDOOR</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php foreach ($paketsGraduationIndoor as $key => $paketGraduationIndoor) : ?>
                                                    <div class="tab-pane fade show <?php if ($key == 0) {
                                                                                        echo 'active';
                                                                                    } ?>" id="list-graduation-indoor-<?= $key ?>" role="tabpanel" aria-labelledby="list-graduation-indoor-<?= $key ?>">
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Harga </strong>:
                                                                        <?=
                                                                        helper('number');
                                                                        echo number_to_currency($paketGraduationIndoor->harga_paket, 'IDR', 'id_ID');
                                                                        ?>
                                                                    </li>
                                                                    <li><strong>Tenaga Kerja </strong>:

                                                                        <?php if ($paketGraduationIndoor->fotografer != 0) {
                                                                            echo $paketGraduationIndoor->fotografer ?>
                                                                            Fotografer
                                                                            <?php if ($paketGraduationIndoor->videografer != 0) { ?>
                                                                                <?= $paketGraduationIndoor->videografer ?> Videografer
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <?php if ($paketGraduationIndoor->asisten != 0) {
                                                                            echo $paketGraduationIndoor->asisten ?>
                                                                            Asisten
                                                                        <?php } ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Waktu kerja </strong>:
                                                                        <?= $paketGraduationIndoor->waktu_kerja; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto </strong>:
                                                                        <?= $paketGraduationIndoor->jumlah_foto; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto edit </strong>:
                                                                        <?= $paketGraduationIndoor->jumlah_foto_edit; ?>
                                                                    </li>
                                                                    <?php if ($paketGraduationIndoor->cetak_foto != '') { ?>
                                                                        <li>
                                                                            <strong>Cetak </strong>:
                                                                            <?= $paketGraduationIndoor->cetak_foto; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <?php if ($paketGraduationIndoor->videografi != '') { ?>
                                                                        <li>
                                                                            <strong>Videografi </strong>:
                                                                            <?= $paketGraduationIndoor->videografi; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Penyimpanan </strong>:
                                                                        <?= $paketGraduationIndoor->penyimpanan; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Deskripsi Paket </strong>:
                                                                        <?= $paketGraduationIndoor->deskripsi_paket; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="portfolio-description">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <a href="#" id="pesanSekarangGraduationIndoor<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="pesanTextGraduationIndoor<?= $key ?>">Pesan Sekarang</span>
                                                                                <div id="pesanLoadingGraduationIndoor<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="#" id="masukkanKeranjangGraduationIndoor<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="keranjangTextGraduationIndoor<?= $key ?>">Masukkan Keranjang</span>
                                                                                <div id="keranjangLoadingGraduationIndoor<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="https://wa.me/6285156443674" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                Konsultasi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- js untuk pesanan -->
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#pesanSekarangGraduationIndoor<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var pesanText = document.getElementById("pesanTextGraduationIndoor<?= $key ?>");
                                                                var pesanLoading = document.getElementById("pesanLoadingGraduationIndoor<?= $key ?>");

                                                                pesanText.classList.add("d-none");
                                                                pesanLoading.classList.remove("d-none");

                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketGraduationIndoor->id_paket ?>,
                                                                                    type: 'pesan',
                                                                                },
                                                                                success: function(response) {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                    window.location.href = '<?= base_url('/checkout') ?>';
                                                                                },
                                                                                error: function() {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        pesanText.classList.remove("d-none");
                                                                        pesanLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                            $('#masukkanKeranjangGraduationIndoor<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var keranjangText = document.getElementById("keranjangTextGraduationIndoor<?= $key ?>");
                                                                var keranjangLoading = document.getElementById("keranjangLoadingGraduationIndoor<?= $key ?>");

                                                                keranjangText.classList.add("d-none");
                                                                keranjangLoading.classList.remove("d-none");

                                                                const anchorBtn = document.getElementById('masukkanKeranjangGraduationIndoor<?= $key ?>');
                                                                anchorBtn.disabled = true;
                                                                // perform AJAX request here
                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketGraduationIndoor->id_paket ?>,
                                                                                    type: 'keranjang',
                                                                                },
                                                                                success: function(response) {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                },
                                                                                error: function() {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        keranjangText.classList.remove("d-none");
                                                                        keranjangLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Portfolio Details Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Graduation Outdoor -->
    <div class="modal fade" id="modalGraduationOutdoor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border:none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Portfolio Details Section ======= -->
                    <section id="portfolio-details" class="portfolio-details" style="padding-top:0;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="portfolio-details-slider swiper">
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/10.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/assets/img/portfolio/14.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="modal-title me-4" id="exampleModalLabel">Paket Graduation Outdoor</h5>
                                            <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                            <div class="list-group flex-row mt-4" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage active" id="list-controller-graduation-outdoor-0" data-bs-toggle="list" href="#list-graduation-outdoor-0" role="tab" aria-controls="list-graduation-outdoor-0">GRADUATION OUTDOOR BASIC</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-graduation-outdoor-1" data-bs-toggle="list" href="#list-graduation-outdoor-1" role="tab" aria-controls="list-graduation-outdoor-1">GRADUATION OUTDOOR PREMIUM</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-graduation-outdoor-2" data-bs-toggle="list" href="#list-graduation-outdoor-2" role="tab" aria-controls="list-graduation-outdoor-2">GRADUATION OUTDOOR EXCLUSIVE</a>
                                                <a class="list-group-item list-group-item-action list-group-item-subpackage" id="list-controller-graduation-outdoor-3" data-bs-toggle="list" href="#list-graduation-outdoor-3" role="tab" aria-controls="list-graduation-outdoor-3">GRADUATION OUTDOOR EXCLUSIVE + VIDEO</a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <?php foreach ($paketsGraduationOutdoor as $key => $paketGraduationOutdoor) : ?>
                                                    <div class="tab-pane fade show <?php if ($key == 0) {
                                                                                        echo 'active';
                                                                                    } ?>" id="list-graduation-outdoor-<?= $key ?>" role="tabpanel" aria-labelledby="list-graduation-outdoor-<?= $key ?>">
                                                        <div class="portfolio-wrap">
                                                            <div class="portfolio-info">
                                                                <ul>
                                                                    <li>
                                                                        <strong>Harga </strong>:
                                                                        <?=
                                                                        helper('number');
                                                                        echo number_to_currency($paketGraduationOutdoor->harga_paket, 'IDR', 'id_ID');
                                                                        ?>
                                                                    </li>
                                                                    <li><strong>Tenaga Kerja </strong>:

                                                                        <?php if ($paketGraduationOutdoor->fotografer != 0) {
                                                                            echo $paketGraduationOutdoor->fotografer ?>
                                                                            Fotografer
                                                                            <?php if ($paketGraduationOutdoor->videografer != 0) { ?>
                                                                                <?= $paketGraduationOutdoor->videografer ?> Videografer
                                                                            <?php } ?>
                                                                        <?php } ?>
                                                                        <?php if ($paketGraduationOutdoor->asisten != 0) {
                                                                            echo $paketGraduationOutdoor->asisten ?>
                                                                            Asisten
                                                                        <?php } ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Waktu kerja </strong>:
                                                                        <?= $paketGraduationOutdoor->waktu_kerja; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto </strong>:
                                                                        <?= $paketGraduationOutdoor->jumlah_foto; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Jumlah foto edit </strong>:
                                                                        <?= $paketGraduationOutdoor->jumlah_foto_edit; ?>
                                                                    </li>
                                                                    <?php if ($paketGraduationOutdoor->cetak_foto != '') { ?>
                                                                        <li>
                                                                            <strong>Cetak </strong>:
                                                                            <?= $paketGraduationOutdoor->cetak_foto; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <?php if ($paketGraduationOutdoor->videografi != '') { ?>
                                                                        <li>
                                                                            <strong>Videografi </strong>:
                                                                            <?= $paketGraduationOutdoor->videografi; ?>
                                                                        </li>
                                                                    <?php } ?>
                                                                    <li>
                                                                        <strong>Penyimpanan </strong>:
                                                                        <?= $paketGraduationOutdoor->penyimpanan; ?>
                                                                    </li>
                                                                    <li>
                                                                        <strong>Deskripsi Paket </strong>:
                                                                        <?= $paketGraduationOutdoor->deskripsi_paket; ?>
                                                                    </li>
                                                                </ul>
                                                                <div class="portfolio-description">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <a href="#" id="pesanSekarangGraduationOutdoor<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="pesanTextGraduationOutdoor<?= $key ?>">Pesan Sekarang</span>
                                                                                <div id="pesanLoadingGraduationOutdoor<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="#" id="masukkanKeranjangGraduationOutdoor<?= $key ?>" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                <span id="keranjangTextGraduationOutdoor<?= $key ?>">Masukkan Keranjang</span>
                                                                                <div id="keranjangLoadingGraduationOutdoor<?= $key ?>" class="spinner-border text-light d-none" role="status">
                                                                                    <span class="sr-only"></span>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <a href="https://wa.me/6285156443674" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                                                                Konsultasi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- js untuk pesanan -->
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#pesanSekarangGraduationOutdoor<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var pesanText = document.getElementById("pesanTextGraduationOutdoor<?= $key ?>");
                                                                var pesanLoading = document.getElementById("pesanLoadingGraduationOutdoor<?= $key ?>");

                                                                pesanText.classList.add("d-none");
                                                                pesanLoading.classList.remove("d-none");

                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketGraduationOutdoor->id_paket ?>,
                                                                                    type: 'pesan',
                                                                                },
                                                                                success: function(response) {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                    window.location.href = '<?= base_url('/checkout') ?>';
                                                                                },
                                                                                error: function() {
                                                                                    pesanText.classList.remove("d-none");
                                                                                    pesanLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            pesanText.classList.remove("d-none");
                                                                            pesanLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        pesanText.classList.remove("d-none");
                                                                        pesanLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                            $('#masukkanKeranjangGraduationOutdoor<?= $key ?>').on('click', function(e) {
                                                                e.preventDefault();

                                                                var keranjangText = document.getElementById("keranjangTextGraduationOutdoor<?= $key ?>");
                                                                var keranjangLoading = document.getElementById("keranjangLoadingGraduationOutdoor<?= $key ?>");

                                                                keranjangText.classList.add("d-none");
                                                                keranjangLoading.classList.remove("d-none");

                                                                const anchorBtn = document.getElementById('masukkanKeranjangGraduationOutdoor<?= $key ?>');
                                                                anchorBtn.disabled = true;
                                                                // perform AJAX request here
                                                                $.ajax({
                                                                    url: '<?= site_url('/check') ?>',
                                                                    type: 'POST',
                                                                    success: function(response) {
                                                                        if (response.status == 'Belum ada pesanan!') {
                                                                            $.ajax({
                                                                                url: '<?= site_url('/paket/detail') ?>',
                                                                                type: 'POST',
                                                                                data: {
                                                                                    id_paket: <?= $paketGraduationOutdoor->id_paket ?>,
                                                                                    type: 'keranjang',
                                                                                },
                                                                                success: function(response) {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Berhasil!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                },
                                                                                error: function() {
                                                                                    keranjangText.classList.remove("d-none");
                                                                                    keranjangLoading.classList.add("d-none");
                                                                                    Toastify({
                                                                                        text: "Gagal!",
                                                                                        duration: 3000,
                                                                                        offset: {
                                                                                            x: 50,
                                                                                        },
                                                                                    }).showToast();
                                                                                }
                                                                            });
                                                                        } else if (response.status == 'Belum login!') {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            window.location.href = '<?= base_url('/login') ?>';
                                                                        } else {
                                                                            keranjangText.classList.remove("d-none");
                                                                            keranjangLoading.classList.add("d-none");
                                                                            Toastify({
                                                                                text: response.status,
                                                                                duration: 3000,
                                                                                offset: {
                                                                                    x: 50,
                                                                                },
                                                                            }).showToast();
                                                                        }
                                                                    },
                                                                    error: function() {
                                                                        keranjangText.classList.remove("d-none");
                                                                        keranjangLoading.classList.add("d-none");
                                                                        Toastify({
                                                                            text: "Gagal!",
                                                                            duration: 3000,
                                                                            offset: {
                                                                                x: 50,
                                                                            },
                                                                        }).showToast();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Portfolio Details Section -->
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End #main -->

<?= $this->include('pages/user/template/footer.php') ?>

<?= $this->endSection() ?>