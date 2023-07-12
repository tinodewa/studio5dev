<?= $this->extend('pages/user/template/page_layout.php') ?>

<?= $this->section('head_resource') ?>

<!-- Include Snap.js library -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-vr-SIa3W6nh_dkMD"></script>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php $session = session(); ?>

<?= $this->include('pages/user/template/navbar.php') ?>

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <h2 class="mb-0">Data Pesanan</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section class="contact">
        <div class="container" data-aos="fade-up">
            <!-- <form action="#"> -->
            <!-- <form action="/checkout" method="post"> -->
            <div class="row gy-4">
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="col-md-6">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                </div>
                <div class="col-md-6">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="datetime-local" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <div class="col-md-6">
                    <label for="telp" class="form-label">Nomor Telpon</label>
                    <input type="text" class="form-control" id="telp" name="telp" placeholder="nomor telpon" required>
                </div>
                <div class="col-md-12">
                    <label for="catatan" class="form-label">Catatan</label>
                    <textarea class="form-control" id="catatan" name="catatan" rows="6" placeholder="Catatan" required></textarea>
                </div>
                <div class="col-md-6">
                    <label for="extra_waktu_kerja" class="form-label">Penambahan Waktu Kerja (Rp 250.000,00/jam)</label>
                    <div class="input-group mb-3 col-6">
                        <div class="input-group-text">
                            <input class="form-check-input" id="waktuBox" type="checkbox">
                        </div>
                        <input type="number" class="form-control" id="extra_waktu_kerja" name="extra_waktu_kerja" placeholder="0" value="0" oninput="this.value = Math.abs(this.value)" disabled>
                    </div>
                </div>
                <?php if (str_contains($pesananUserPaket[0]->nama_paket, "Engagement") || str_contains($pesananUserPaket[0]->nama_paket, "Akad")) { ?>
                    <div class="col-md-6">
                        <label for="extra_premium_magazine" class="form-label">Penambahan Hasil Cetak</label>
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-text">
                                <input class="form-check-input" type="checkbox" id="magazineBox">
                            </div>
                            <select class="form-select" id="extra_premium_magazine" disabled>
                                <option value="1">Album Magnetic Rp 250.000,00</option>
                                <option value="2">Premium Magazine Rp 400.000,00</option>
                                <option value="3">Magazine Album Rp 500.000,00</option>
                            </select>
                        </div>
                    </div>
                <?php } ?>
                <?php if (str_contains($pesananUserPaket[0]->nama_paket, "Pre-Wedding Package Indoor") || str_contains($pesananUserPaket[0]->nama_paket, "Maternity") || str_contains($pesananUserPaket[0]->nama_paket, "Graduation") || str_contains($pesananUserPaket[0]->nama_paket, "Family") || str_contains($pesananUserPaket[0]->nama_paket, "Couple")) { ?>
                    <div class="col-md-6">
                        <label for="extra_background" class="form-label">Penambahan Background & Outfit (Rp 50.000,00/tambahan)</label>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input" type="checkbox" id="backgroundBox" />
                            </div>
                            <input type="number" class="form-control" id="extra_background" name="extra_background" placeholder="0" value="0" oninput="this.value = Math.abs(this.value)" disabled>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-lg-12 mb-20">
                    <div class="payment-details">
                        <h4 class="checkout-title">Paket Dipesan</h4>
                        <div class="cart-area">
                            <div class="cart-table-content wishlist-wrap">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead aria-disabled="true">
                                            <tr>
                                                <th sortable="false">Paket</th>
                                                <th sortable="false" class="text-center">Harga</th>
                                                <th sortable="false" class="text-center">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <script type="text/javascript">
                                                let totalPrice = 0;
                                            </script>
                                            <tr class="pb-20 cart-row">
                                                <td class="align-middle">
                                                    <?= $pesananUserPaket[0]->nama_paket; ?>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="amount cart-price">
                                                        <?=
                                                        number_to_currency($pesananUserPaket[0]->harga_paket, 'IDR', 'id_ID');
                                                        ?>
                                                    </span>
                                                </td>
                                                <td class="product-remove align-middle text-center">
                                                    <button type="button" class="btn btn-sm btn-grey" data-bs-toggle="modal" data-bs-target="#modalDetail">
                                                        Detail
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="row">
                        <div class="col-4">
                            <button class="btn btn-warning btn-submit w-100" id="btnCancel">
                                Kembali
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-danger btn-submit w-100" id="btnCancelAndDelete">
                                Batal & Hapus Pesanan
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary btn-submit w-100" id="btnCheckout" data-bs-toggle="modal" data-bs-target="#modalKonfirmasi">
                                Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </form> -->
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- modal konfirmasi -->
    <div class="modal fade" id="modalKonfirmasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah pesanan sudah tepat?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            Nama Paket :</br>
                            <h5><?= $pesananUserPaket[0]->nama_paket; ?></h5>
                        </div>
                        <div class="col-12">
                            Harga Paket :</br>
                            <h5><?= number_to_currency($pesananUserPaket[0]->harga_paket, 'IDR', 'id_ID'); ?></h5>
                        </div>
                        <div class="col-12">
                            Harga Extra :</br>
                            <h5 id="checkout_extra">Rp 0</h5>
                        </div>
                        <div class="col-12">
                            Harga Total :</br>
                            <h5 id="checkout_total">Rp 0</h5>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Belum</button>
                    <button type="submit" class="btn btn-primary" id="btnSubmit">Checkout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal detail -->
    <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <div class="col-lg-12">
                                    <h5 class="modal-title me-4" id="exampleModalLabel">
                                        <?= $pesananUserPaket[0]->nama_paket; ?>
                                    </h5>
                                    <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                    <div class="portfolio-wrap">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="portfolio-info">
                                                    <ul>
                                                        <li>
                                                            <strong>Harga </strong>:
                                                            <?= number_to_currency($pesananUserPaket[0]->harga_paket, 'IDR', 'id_ID'); ?>
                                                        </li>
                                                        <li><strong>Tenaga Kerja </strong>:

                                                            <?php if ($pesananUserPaket[0]->fotografer != 0) { ?>
                                                                <?= $pesananUserPaket[0]->fotografer ?>
                                                                Fotografer
                                                                <?php if ($pesananUserPaket[0]->videografer != 0) { ?>
                                                                    <?= $pesananUserPaket[0]->videografer ?> Videografer
                                                                <?php } ?>
                                                            <?php } ?>
                                                            <?php if ($pesananUserPaket[0]->asisten != 0) { ?>
                                                                <?= $pesananUserPaket[0]->asisten ?>
                                                                Asisten
                                                            <?php } ?>
                                                        </li>
                                                        <li>
                                                            <strong>Waktu kerja </strong>:
                                                            <?= $pesananUserPaket[0]->waktu_kerja; ?>
                                                        </li>
                                                        <li>
                                                            <strong>Jumlah foto </strong>:
                                                            <?= $pesananUserPaket[0]->jumlah_foto; ?>
                                                        </li>
                                                        <li>
                                                            <strong>Jumlah foto edit </strong>:
                                                            <?= $pesananUserPaket[0]->jumlah_foto_edit; ?>
                                                        </li>
                                                        <li>
                                                            <strong>Cetak </strong>:
                                                            <?= $pesananUserPaket[0]->cetak_foto; ?>
                                                        </li>
                                                        <?php if ($pesananUserPaket[0]->videografi != '') { ?>
                                                            <li>
                                                                <strong>Videografi </strong>:
                                                                <?= $pesananUserPaket[0]->videografi; ?>
                                                            </li>
                                                        <?php } ?>
                                                        <li>
                                                            <strong>Penyimpanan </strong>:
                                                            <?= $pesananUserPaket[0]->penyimpanan; ?>
                                                        </li>
                                                        <li>
                                                            <strong>Deskripsi Paket </strong>:
                                                            <?= $pesananUserPaket[0]->deskripsi_paket; ?>
                                                        </li>
                                                    </ul>
                                                </div>
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

<script type="text/javascript" src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-OV3HUnEjL41EDivg"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        var subtotal = document.getElementById('cart-subtotal');
        var checkout_extra = document.getElementById('checkout_extra');
        var checkout_total = document.getElementById('checkout_total');
        var extra_waktu = 0;
        var extra_magazine = 0;
        var extra_background = 0;
        var nama_paket = '<?= $pesananUserPaket[0]->nama_paket ?>';
        const myModal = new bootstrap.Modal(document.getElementById('modalKonfirmasi'));

        // Dismiss the modal programmatically
        function dismissModalKonfirmasi() {
            myModal.hide();
        }

        $('#waktuBox').click(function() {
            document.getElementById('extra_waktu_kerja').disabled = !this.checked;
        });
        $('#magazineBox').click(function() {
            document.getElementById('extra_premium_magazine').disabled = !this.checked;
        });
        $('#backgroundBox').click(function() {
            document.getElementById('extra_background').disabled = !this.checked;
        });
        $('#btnCheckout').click(function() {
            var extra_harga = 0;
            if (document.getElementById('waktuBox').checked) {
                extra_waktu = document.getElementById('extra_waktu_kerja').value;
                extra_harga = extra_harga + (250000 * extra_waktu);
            }

            //set harga extra magazine
            if (nama_paket.includes("Engagement") || nama_paket.includes("Akad")) {
                if (document.getElementById('magazineBox').checked) {
                    extra_magazine = document.getElementById('extra_premium_magazine').value;
                    if (extra_magazine == 1) {
                        extra_harga = extra_harga + 250000;
                    } else if (extra_magazine == 2) {
                        extra_harga = extra_harga + 400000;
                    } else if (extra_magazine == 3) {
                        extra_harga = extra_harga + 500000;
                    }
                }
            }

            //set harga extra background
            if (nama_paket.includes("Pre-Wedding Package Indoor") || nama_paket.includes("Maternity") || nama_paket.includes("Graduation") || nama_paket.includes("Family") || nama_paket.includes("Couple")) {
                if (document.getElementById('backgroundBox').checked) {
                    extra_background = document.getElementById('extra_background').value;
                    extra_harga = extra_harga + (50000 * extra_background);
                }
            }

            var total_harga = <?= $pesananUserPaket[0]->harga_paket ?> + extra_harga;

            checkout_extra.textContent = extra_harga.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0
            });
            checkout_total.textContent = total_harga.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0
            });
        });
        $('#btnSubmit').click(function() {
            if (document.getElementById('nama').value == '' || document.getElementById('alamat').value == '' || document.getElementById('tanggal').value == '' || document.getElementById('telp').value == '') {
                dismissModalKonfirmasi();
                Toastify({
                    text: "Mohon lengkapi data!",
                    duration: 2000,
                    offset: {
                        x: 50,
                    },
                }).showToast();
            } else {
                //set extra waktu
                if (document.getElementById('waktuBox').checked) {
                    extra_waktu = document.getElementById('extra_waktu_kerja').value;
                } else {
                    extra_waktu = 0;
                }

                //set extra magazine
                if (nama_paket.includes("Engagement") || nama_paket.includes("Akad")) {
                    if (document.getElementById('magazineBox').checked) {
                        extra_magazine = document.getElementById('extra_premium_magazine').value;
                    } else {
                        extra_magazine = 0;
                    }
                }

                //set extra background
                if (nama_paket.includes("Pre-Wedding Package Indoor") || nama_paket.includes("Maternity") || nama_paket.includes("Graduation") || nama_paket.includes("Family") || nama_paket.includes("Couple")) {
                    if (document.getElementById('backgroundBox').checked) {
                        extra_background = document.getElementById('extra_background').value;
                    } else {
                        extra_background = 0;
                    }
                }

                $.ajax({
                    url: '<?= site_url('/checkout') ?>',
                    type: 'POST',
                    data: {
                        id_paket: <?= $pesananUserPaket[0]->id_paket ?>,
                        nama: document.getElementById('nama').value,
                        alamat: document.getElementById('alamat').value,
                        tanggal: document.getElementById('tanggal').value,
                        telp: document.getElementById('telp').value,
                        catatan: document.getElementById('catatan').value,
                        total_price: <?= $pesananUserPaket[0]->harga_paket ?>,
                        extra_waktu_kerja: extra_waktu,
                        extra_premium_magazine: extra_magazine,
                        extra_background_dan_outfit: extra_background,
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status != 'Belum ada pesanan!') {
                            var snapToken = response.snapToken;
                            console.log('Snap Token:', snapToken);

                            window.snap.pay(snapToken);
                        } else {
                            console.log(response.status);
                        }
                        dismissModalKonfirmasi();
                    },
                    error: function(response) {
                        dismissModalKonfirmasi();
                        console.log(response);
                    }
                });
            }
        });
        $('#btnCancel').click(function() {
            window.location.href = '<?= base_url('/') ?>';
        });
        $('#btnCancelAndDelete').click(function() {
            $.ajax({
                url: '<?= site_url('/checkout/remove') ?>',
                type: 'POST',
                data: {
                    id_pesanan: <?= $pesananUserPaket[0]->id_pesanan ?>,
                },
                success: function(response) {
                    window.location.href = '<?= base_url('/') ?>';
                },
                error: function(response) {
                    console.log(response);
                }
            });
        });
    });
</script>

<?= $this->endSection() ?>