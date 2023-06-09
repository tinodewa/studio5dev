<?= $this->extend('layout/page_layout.php') ?>

<?= $this->section('content') ?>

<?php $session = session() ?>

<?= $this->include('pages/user/layout/user_navbar.php') ?>

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/">Home</a></li>
                <li>Detail Paket</li>
            </ol>
            <h2>Paket <?= $paket->nama_paket ?></h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <?php if ($paket->nama_paket == "PreWedding") { ?>
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
                    <?php } else if ($paket->nama_paket == "Wedding") { ?>
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
                    <?php } else if ($paket->nama_paket == "Maternity") { ?>
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="/assets/img/portfolio/9.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    <?php } else if ($paket->nama_paket == "Family") { ?>
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="/assets/img/portfolio/7.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    <?php } else if ($paket->nama_paket == "Birthday Party") { ?>
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="/assets/img/portfolio/11.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    <?php } else if ($paket->nama_paket == "Group") { ?>
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="/assets/img/portfolio/8.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    <?php } else if ($paket->nama_paket == "Graduation") { ?>
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
                    <?php } else if ($paket->nama_paket == "Event") { ?>
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="/assets/img/portfolio/12.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <h3>Paket <?= $paket->nama_paket ?></h3>
                        <ul>
                            <li><strong>Harga </strong>:
                                <?=
                                helper('number');
                                echo number_to_currency($paket->harga_paket, 'IDR', 'id_ID');
                                ?>
                            </li>
                            <li><strong>Tenaga Kerja </strong>:
                                <?php if ($paket->fotografer != 0) {
                                    echo $paket->fotografer ?>
                                    Fotografer
                                    <?php if ($paket->videografer != 0) { ?>
                                        & <?= $paket->videografer ?> Videografer
                                    <?php } ?>
                                <?php } ?>
                            </li>
                            <li><strong>Waktu </strong>: <?= $paket->waktu ?> jam peliputan</li>
                            <li><strong>Tempat </strong>:
                                <?php
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
                                ?>
                            </li>
                            <li><strong>Hasil Foto </strong>:
                                <?php
                                echo $paket->hasil_jumlah . " cetak foto ukuran " . $paket->hasil_ukuran_cetak . " plus frame. " . "Editing " . $paket->hasil_editing . " foto pilihan.";
                                if ($paket->hasil_cinematic) {
                                    echo "Video cinematic";
                                }
                                ?>
                            </li>
                            <li><strong>kapasitas foto </strong>: <?= $paket->kapasitas ?> </li>
                            <li>Anda dapat mengunduh hasil foto yang akan di unggah dalam web selama 7 hari.</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Deskripsi Paket</h2>
                        <p>
                            <?= $paket->deskripsi_paket ?>
                        </p>
                        <a href="/paket/detail/<?= $paket->id_paket ?>/checkout" button class="btn btn-primary btn-sm col-sm-5">PESAN SEKARANG</a>
                        <a href="#" id="masukkanKeranjang" button class="btn btn-primary btn-sm col-sm-5">
                            <span id="keranjangText">MASUKKAN KERANJANG</span>
                            <div id="keranjangLoading" class="spinner-border text-light d-none" role="status">
                                <span class="sr-only"></span>
                            </div>
                        </a>
                        <a href="/paket/custom/<?= $paket->id_paket ?>" button class="btn btn-primary btn-sm col-sm-12 mt-20">CUSTOM PESANAN INI</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Details Section -->
</main>
<!-- End #main -->

<!-- <div class="main-wrapper main-wrapper-3 paket-detail">
    ?= $this->include('pages/user/layout/user_navbar.php') ?>
    <div class="product-details-area pb-100 mt-50">
        <div class="section-padding-14">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-xl-5 col-lg-12 col-md-12">
                        <div class="pro-details-9-img pro-details-img-zoom">
                            <img src="?= $paket->foto ?>" alt="foto paket">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12">
                        <div class="product-details-content product-details-content-9">
                            <h2 class="color-?= $paket->nama_paket; ?>">Paket ?= $paket->nama_paket ?></h2>
                            <div class="product-ratting-review-wrap">
                                <div class="product-ratting-digit-wrap">
                                    <div class="product-ratting">
                                        <i class="icon-rating"></i>
                                        <i class="icon-rating"></i>
                                        <i class="icon-rating"></i>
                                        <i class="icon-rating"></i>
                                        <i class="icon-rating"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                    <div class="product-digit">
                                        <span>5.0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-price">
                                <span>?=
                                        helper('number');
                                        echo number_to_currency($paket->harga, 'IDR', 'id_ID');
                                        ?>
                                </span>
                                <span class="old-price">Rp 1.000.000,00</span>
                            </div>
                            <h4 class="pro-dec-paragraph-2">Deskripsi paket</h4>
                            <p class="pro-dec-paragraph-3">?= $paket->deskripsi ?></p>
                            <div class="pro-details-action-wrap mt-30 mb-30">
                                <div class="pro-details-action">
                                    <a title="Konsultasi" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z" />
                                        </svg>
                                        Konsultasi
                                    </a>
                                    <a href="/paket/detail/?= $paket->id_paket ?>/masukkan-keranjang" title="Masukkan keranjang"><i class="icon-basket">Masukkan keranjang</i></a>
                                    <a href="#" id="masukkanKeranjang" title="Masukkan keranjang" class="text-center">
                                        <i id="keranjangText" class="icon-basket">Masukkan keranjang</i>
                                        <div id="keranjangLoading" class="spinner-border d-none" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </a>
                                    <a class="social" title="Share" href="#"><i class="icon-share"></i></a>
                                    <div class="product-dec-social">
                                        <a class="whatsapp" title="Whatsapp" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                            </svg>
                                        </a>
                                        <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook-square"></i></a>
                                        <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                        <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                    </div>
                                    <a class="pro-details-buy-now" title="Buat Pesanan" href="/checkout">Buat Pesanan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="toastNotification" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
            <div class="toast-header">
                <strong class="mr-auto">Yeayy!</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                paket berhasil disimpan.
            </div>
        </div>
    </div>
</div> -->
<?= $this->include('pages/user/layout/user_footer.php') ?>

<?= $this->endSection() ?>

<?= $this->section('custom_js') ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#masukkanKeranjang').on('click', function(e) {
            e.preventDefault();

            var keranjangText = document.getElementById("keranjangText");
            var keranjangLoading = document.getElementById("keranjangLoading");

            keranjangText.classList.add("d-none");
            keranjangLoading.classList.remove("d-none");

            const anchorBtn = document.getElementById('masukkanKeranjang');
            anchorBtn.disabled = true;
            // perform AJAX request here
            $.ajax({
                url: '<?= site_url('/paket/detail') ?>',
                type: 'POST',
                data: {
                    id_paket: <?= $paket->id_paket ?>,
                    type: 'keranjang',
                },
                success: function(response) {
                    anchorBtn.disabled = false;
                    keranjangText.classList.remove("d-none");
                    keranjangLoading.classList.add("d-none");
                    Toastify({
                        text: "Berhasil!",
                        duration: 3000
                    }).showToast();
                },
                // error: function() {
                //     //handle AJAX error, if any
                // }
            })
        });
    });
</script>
<?= $this->endSection() ?>