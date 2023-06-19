<?= $this->extend('pages/user/template/page_layout.php') ?>

<?= $this->section('content') ?>

<?php $session = session() ?>

<?= $this->include('pages/user/template/navbar.php') ?>

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
<?= $this->include('pages/user/template/footer.php') ?>

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