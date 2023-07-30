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
                    <label for="nama" class="form-label">Nama Lengkap*</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $session->get('nama_lengkap') ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="telp" class="form-label">Nomor Telpon*</label>
                    <input type="text" class="form-control" id="telp" name="telp" placeholder="nomor telpon" value="<?= $session->get('no_telp') ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="alamat" class="form-label">Alamat*</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-8">
                            <label for="tanggal" class="form-label">Tanggal*</label>
                            <input type="datetime-local" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                        <div class="col-4">
                            <label class="form-label">Cek Tanggal</label>
                            <a href="#" id="cekTanggal" button class="btn btn-package btn-md w-100 mb-3 mr-2">
                                <span id="cekTanggalText">Cek</span>
                                <div id="cekTanggalLoading" class="spinner-border text-light d-none" role="status">
                                    <span class="sr-only"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="catatan" class="form-label">Catatan</label>
                    <textarea class="form-control" id="catatan" name="catatan" rows="6" placeholder="Catatan" required></textarea>
                </div>
                <!-- topping -->
                <div class="col-md-6">
                    <label for="extra_waktu_kerja" class="form-label">Penambahan Waktu Kerja Maks. 4 (Rp 250.000,00/1 jam)</label>
                    <div class="input-group mb-3 col-6">
                        <div class="input-group-text">
                            <input class="form-check-input" id="waktuBox" type="checkbox">
                        </div>
                        <input type="number" class="form-control" id="extra_waktu_kerja" name="extra_waktu_kerja" placeholder="0" value="0" oninput="this.value = Math.abs(this.value)" max="4" disabled>
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
                <?php if (str_contains($pesananUserPaket[0]->nama_paket, "Pre-Wedding Package Indoor") || str_contains($pesananUserPaket[0]->nama_paket, "Maternity") || str_contains($pesananUserPaket[0]->nama_paket, "Graduation Package Indoor") || str_contains($pesananUserPaket[0]->nama_paket, "Family") || str_contains($pesananUserPaket[0]->nama_paket, "Couple")) { ?>
                    <div class="col-md-6">
                        <label for="extra_background" class="form-label">Penambahan Background Maks. 4 (Rp 50.000,00/tambahan)</label>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input" type="checkbox" id="backgroundBox" />
                            </div>
                            <input type="number" class="form-control" id="extra_background" name="extra_background" placeholder="0" value="0" oninput="this.value = Math.abs(this.value)" max="4" disabled>
                        </div>
                    </div>
                <?php } ?>
                <?php if (str_contains($pesananUserPaket[0]->nama_paket, "Group Package Indoor")) { ?>
                    <div class="col-md-6">
                        <label for="extra_orang" class="form-label">Penambahan orang (Rp 40.000,00/orang)</label>
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-text">
                                <input class="form-check-input" id="orangBox" type="checkbox">
                            </div>
                            <input type="number" class="form-control" id="extra_orang" name="extra_orang" placeholder="0" value="0" oninput="this.value = Math.abs(this.value)" max="36" disabled>
                        </div>
                    </div>
                <?php } ?>
                <?php if (str_contains($pesananUserPaket[0]->nama_paket, "Graduation Package")) { ?>
                    <div class="col-md-6">
                        <label for="extra_orang" class="form-label">Penambahan orang non-wisudawan (Rp 10.000,00/orang)</label>
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-text">
                                <input class="form-check-input" id="orangBox" type="checkbox">
                            </div>
                            <input type="number" class="form-control" id="extra_orang" name="extra_orang" placeholder="0" value="0" oninput="this.value = Math.abs(this.value)" max="36" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="extra_wisudawan" class="form-label">Penambahan Wisudawan (Rp 50.000,00/wisudawan)</label>
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-text">
                                <input class="form-check-input" id="wisudawanBox" type="checkbox">
                            </div>
                            <input type="number" class="form-control" id="extra_wisudawan" name="extra_wisudawan" placeholder="0" value="0" oninput="this.value = Math.abs(this.value)" max="36" disabled>
                        </div>
                    </div>
                <?php } ?>
                <?php if (str_contains($pesananUserPaket[0]->nama_paket, "Graduation Package Outdoor")) { ?>
                    <div class="col-md-6">
                        <label for="extra_tempat" class="form-label">Penambahan tempat (Rp 50.000,00/tempat)</label>
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-text">
                                <input class="form-check-input" id="tempatBox" type="checkbox">
                            </div>
                            <input type="number" class="form-control" id="extra_tempat" name="extra_tempat" placeholder="0" value="0" oninput="this.value = Math.abs(this.value)" max="36" disabled>
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
                            <h6 class="mb-0">Nama Paket :</h6>
                            <h5><?= $pesananUserPaket[0]->nama_paket; ?></h5>
                        </div>
                        <div class="col-12">
                            <h6 class="mb-0">Harga Paket :</h6>
                            <h5><?= number_to_currency($pesananUserPaket[0]->harga_paket, 'IDR', 'id_ID'); ?></h5>
                        </div>
                        <div class="col-12">
                            <h6 class="mb-0">Harga Extra :</h6>
                            <h5 id="checkout_extra">Rp 0</h5>
                        </div>
                        <div class="col-12">
                            <h6 class="mb-0">Harga Total :</h6>
                            <h5 id="checkout_total">Rp 0</h5>
                        </div>
                        <div class="col-12">
                            <b>Perhatian!</b>
                            <h6>Pembayaran Gopay dengan QRIS harus segera diselesaikan & jangan menutup popup pembayaran QRIS!</h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Belum</button>
                            </div>
                            <div class="col-6">
                                <a href="#" id="btnSubmit" button class="btn btn-primary w-100">
                                    <span id="btnSubmitText">Checkout</span>
                                    <div id="btnSubmitLoading" class="spinner-border text-light d-none" role="status">
                                        <span class="sr-only"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
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
                                                        <?php if ($pesananUserPaket[0]->cetak_foto != '') { ?>
                                                            <li>
                                                                <strong>Cetak </strong>:
                                                                <?= $pesananUserPaket[0]->cetak_foto; ?>
                                                            </li>
                                                        <?php } ?>
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
        var extra_tempat = 0;
        var extra_orang = 0;
        var extra_wisudawan = 0;
        var total_harga = 0;
        var nama_paket = '<?= $pesananUserPaket[0]->nama_paket ?>';
        var status_tanggal = false;
        var btnSubmitText = document.getElementById("btnSubmitText");
        var btnSubmitLoading = document.getElementById("btnSubmitLoading");
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
        $('#tempatBox').click(function() {
            document.getElementById('extra_tempat').disabled = !this.checked;
        });
        $('#orangBox').click(function() {
            document.getElementById('extra_orang').disabled = !this.checked;
        });
        $('#wisudawanBox').click(function() {
            document.getElementById('extra_wisudawan').disabled = !this.checked;
        });


        $('#cekTanggal').click(function() {
            var tanggal_mulai = '';
            var tanggal_selesai = '';
            status_tanggal = false;
            tanggal_mulai = new Date(document.getElementById('tanggal').value);
            tanggal_selesai = new Date(document.getElementById('tanggal').value);
            tanggal_sekarang = new Date();

            if (tanggal_mulai.toString != "Invalid Date" && !isNaN(tanggal_mulai)) {
                if (tanggal_mulai > tanggal_sekarang) {
                    var extra_waktu = 0;
                    var durasi = 0;
                    var cekText = document.getElementById("cekTanggalText");
                    var cekLoading = document.getElementById("cekTanggalLoading");

                    cekText.classList.add("d-none");
                    cekLoading.classList.remove("d-none");
                    var waktuKerja = '<?= $pesananUserPaket[0]->waktu_kerja; ?>';
                    //set durasi paket
                    if (waktuKerja == '8 working hours') {
                        durasi = 8;
                    } else if (waktuKerja == '7 working hours') {
                        durasi = 7;
                    } else if (waktuKerja == '6 working hours') {
                        durasi = 6;
                    } else if (waktuKerja == '5 working hours') {
                        durasi = 5;
                    } else if (waktuKerja == '4 working hours') {
                        durasi = 4;
                    } else if (waktuKerja == '3 working hours') {
                        durasi = 3;
                    } else {
                        durasi = 2;
                    }

                    //set extra waktu
                    if (document.getElementById('waktuBox').checked) {
                        extra_waktu = document.getElementById('extra_waktu_kerja').value;
                    }

                    //set total durasi
                    durasi = durasi + extra_waktu;

                    //kalkulasi tanggal dan jam mulai dari pesanan ini
                    tanggal_mulai.setHours(tanggal_mulai.getHours() - durasi);

                    //kalkulasi tanggal dan jam selesai dari pesanan ini
                    tanggal_selesai.setHours(tanggal_selesai.getHours() + durasi);

                    //convert local datetime ke format sql
                    tanggal_mulai = convertToSQLDatetime(tanggal_mulai);
                    tanggal_selesai = convertToSQLDatetime(tanggal_selesai);

                    $.ajax({
                        url: '<?= site_url('/check-datetime') ?>',
                        type: 'POST',
                        data: {
                            tanggalMulai: tanggal_mulai,
                            tanggalSelesai: tanggal_selesai,
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == 'Penuh!') {
                                console.log(tanggal_mulai);
                                console.log(tanggal_selesai);
                                console.log(response.data);
                                cekText.classList.remove("d-none");
                                cekLoading.classList.add("d-none");
                                Toastify({
                                    text: response.status,
                                    duration: 3000,
                                    offset: {
                                        x: 50,
                                    },
                                }).showToast();
                            } else if (response.status == 'Belum penuh!') {
                                console.log(tanggal_mulai);
                                console.log(tanggal_selesai);
                                console.log(response.data);
                                status_tanggal = true;
                                cekText.classList.remove("d-none");
                                cekLoading.classList.add("d-none");
                                Toastify({
                                    text: 'Tanggal bisa diambil!',
                                    duration: 3000,
                                    offset: {
                                        x: 50,
                                    },
                                }).showToast();
                            } else {
                                console.log(tanggal_mulai);
                                console.log(tanggal_selesai);
                                console.log(response.data);
                                cekText.classList.remove("d-none");
                                cekLoading.classList.add("d-none");
                                Toastify({
                                    text: 'Coba lagi nanti!',
                                    duration: 3000,
                                    offset: {
                                        x: 50,
                                    },
                                }).showToast();
                            }
                        },
                        error: function(e) {
                            console.log(tanggal_mulai);
                            console.log(tanggal_selesai);
                            console.log(e);
                            cekText.classList.remove("d-none");
                            cekLoading.classList.add("d-none");
                            Toastify({
                                text: "Gagal!",
                                duration: 3000,
                                offset: {
                                    x: 50,
                                },
                            }).showToast();
                        }
                    });
                } else {
                    Toastify({
                        text: "Tanggal telah terlewati!",
                        duration: 3000,
                        offset: {
                            x: 50,
                        },
                    }).showToast();
                }
            } else {
                Toastify({
                    text: "Pilih tanggal dahulu!",
                    duration: 3000,
                    offset: {
                        x: 50,
                    },
                }).showToast();
            }
        })

        $('#btnCheckout').click(function() {
            var extra_harga = 0;

            //set harga extra waktu
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
            if (nama_paket.includes("Pre-Wedding Package Indoor") || nama_paket.includes("Maternity") || nama_paket.includes("Graduation Package Indoor") || nama_paket.includes("Family") || nama_paket.includes("Couple")) {
                if (document.getElementById('backgroundBox').checked) {
                    extra_background = document.getElementById('extra_background').value;
                    extra_harga = extra_harga + (50000 * extra_background);
                }
            }

            //set extra tempat
            if (nama_paket.includes("Graduation Package Outdoor")) {
                if (document.getElementById('tempatBox').checked) {
                    extra_tempat = document.getElementById('extra_tempat').value;
                    extra_harga = extra_harga + (50000 * extra_tempat);
                }
            }

            //set extra orang
            if (nama_paket.includes("Graduation Package") || nama_paket.includes("Group Package Indoor")) {
                if (document.getElementById('orangBox').checked) {
                    extra_orang = document.getElementById('extra_orang').value;

                    if (nama_paket.includes('Group Package Indoor')) {
                        extra_harga = extra_harga + (40000 * extra_orang);
                    } else {
                        extra_harga = extra_harga + (10000 * extra_orang);
                    }
                }
            }

            //set extra wisudawan
            if (nama_paket.includes("Graduation Package")) {
                if (document.getElementById('wisudawanBox').checked) {
                    extra_wisudawan = document.getElementById('extra_wisudawan').value;
                    extra_harga = extra_harga + (50000 * extra_wisudawan);
                }
            }

            total_harga = <?= $pesananUserPaket[0]->harga_paket ?> + extra_harga;

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
            if (document.getElementById('nama').value == '' || document.getElementById('alamat').value == '' || document.getElementById('tanggal').value == '' || document.getElementById('telp').value == '' || status_tanggal == false) {
                dismissModalKonfirmasi();
                Toastify({
                    text: "Mohon lengkapi data dan cek tanggal!",
                    duration: 2000,
                    offset: {
                        x: 50,
                    },
                }).showToast();
            } else {
                btnSubmitText.classList.add("d-none");
                btnSubmitLoading.classList.remove("d-none");

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
                if (nama_paket.includes("Pre-Wedding Package Indoor") || nama_paket.includes("Maternity") || nama_paket.includes("Graduation Package Indoor") || nama_paket.includes("Family") || nama_paket.includes("Couple")) {
                    if (document.getElementById('backgroundBox').checked) {
                        extra_background = document.getElementById('extra_background').value;
                    } else {
                        extra_background = 0;
                    }
                }

                //set extra tempat
                if (nama_paket.includes("Graduation Package Outdoor")) {
                    if (document.getElementById('tempatBox').checked) {
                        extra_tempat = document.getElementById('extra_tempat').value;
                    } else {
                        extra_tempat = 0;
                    }
                }

                //set extra orang
                if (nama_paket.includes("Graduation Package") || nama_paket.includes("Group Package Indoor")) {
                    if (document.getElementById('orangBox').checked) {
                        extra_orang = document.getElementById('extra_orang').value;
                    } else {
                        extra_orang = 0;
                    }
                }

                //set extra wisudawan
                if (nama_paket.includes("Graduation Package")) {
                    if (document.getElementById('wisudawanBox').checked) {
                        extra_wisudawan = document.getElementById('extra_wisudawan').value;
                    } else {
                        extra_wisudawan = 0;
                    }
                }

                $.ajax({
                    url: '<?= site_url('/checkout') ?>',
                    type: 'POST',
                    data: {
                        id_paket: <?= $pesananUserPaket[0]->id_paket ?>,
                        total_price: total_harga,
                        nama: document.getElementById('nama').value,
                        alamat: document.getElementById('alamat').value,
                        tanggal: document.getElementById('tanggal').value,
                        telp: document.getElementById('telp').value,
                        catatan: document.getElementById('catatan').value,
                        extra_waktu_kerja: extra_waktu,
                        extra_premium_magazine: extra_magazine,
                        extra_background: extra_background,
                        extra_tempat: extra_tempat,
                        extra_orang: extra_orang,
                        extra_wisudawan: extra_wisudawan,
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status != 'Belum ada pesanan!') {
                            btnSubmitText.classList.remove("d-none");
                            btnSubmitLoading.classList.add("d-none");
                            var snapToken = response.snapToken;
                            console.log('Snap Token:', snapToken);

                            window.snap.pay(snapToken);
                        } else {
                            btnSubmitText.classList.remove("d-none");
                            btnSubmitLoading.classList.add("d-none");
                            console.log(response.status);
                        }
                        dismissModalKonfirmasi();
                    },
                    error: function(response) {
                        btnSubmitText.classList.remove("d-none");
                        btnSubmitLoading.classList.add("d-none");
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

        function convertToSQLDatetime(inputDatetime) {
            const datetime = new Date(inputDatetime);
            if (isNaN(datetime)) {
                return "Invalid Date";
            }

            const year = datetime.getFullYear();
            const month = String(datetime.getMonth() + 1).padStart(2, "0");
            const day = String(datetime.getDate()).padStart(2, "0");
            const hours = String(datetime.getHours()).padStart(2, "0");
            const minutes = String(datetime.getMinutes()).padStart(2, "0");
            const seconds = String(datetime.getSeconds()).padStart(2, "0");

            return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
        }
    });
</script>

<?= $this->endSection() ?>