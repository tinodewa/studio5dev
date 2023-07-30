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

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <h2>Custom Pesanan</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section class="contact">
        <div class="container" data-aos="fade-up">
            <!-- <form action="/paket/custom/?= $paket->id_paket; ?>" method="post"> -->
            <div class="row gy-4">
                <div class="col-md-12">
                    <label class="form-label">Nama Paket</label>
                    <input type="text" class="form-control d-none" id="nama_paket" name="nama_paket" placeholder="Nama Paket" <?php if ($paket->nama_paket != null) { ?> value="Custom <?= $paket->nama_paket ?>" <?php } else { ?> value="" <?php } ?> required>
                    <input type="text" class="form-control" id="nama_paket_show" name="nama_paket_show" placeholder="Nama Paket" <?php if ($paket->nama_paket != null) { ?> value="Custom <?= $paket->nama_paket ?>" <?php } else { ?> value="" <?php } ?> disabled>
                </div>
                <div class="col-md-6">
                    <label for="hasil_foto_edit" class="form-label">Hasil Edit Foto</label>
                    <div class="input-group mb-3 col-6">
                        <select class="form-select" id="hasil_foto_edit">
                            <option value="1">Tidak ada Rp 0,00</option>
                            <option value="2" <?php if ($paket->jumlah_foto_edit == '5 photo edited') { ?> selected <?php } ?>>5 foto edit Rp 25.000,00</option>
                            <option value="3" <?php if ($paket->jumlah_foto_edit == '10 photo edited') { ?> selected <?php } ?>>10 foto edit Rp 50.000,00</option>
                            <option value="4" <?php if ($paket->jumlah_foto_edit == '15 foto edit') { ?> selected <?php } ?>>15 foto edit Rp 75.000,00</option>
                            <option value="5" <?php if ($paket->jumlah_foto_edit == '20 photo edited') { ?> selected <?php } ?>>20 foto edit Rp 100.000,00</option>
                            <option value="6" <?php if ($paket->jumlah_foto_edit == '50 photo edited') { ?> selected <?php } ?>>50 photo edited Rp 250.000,00</option>
                            <?php if (str_contains($paket->jumlah_foto, "Unlimited photo") || str_contains($paket->jumlah_foto, "Unlimited") || str_contains($paket->jumlah_foto, "150 photo")) { ?>
                                <option value="7" <?php if ($paket->jumlah_foto_edit == '100 photo edited') { ?> selected <?php } ?>>100 photo edited Rp 500.000,00</option>
                                <option value="8" <?php if ($paket->jumlah_foto_edit == '150 photo edited') { ?> selected <?php } ?>>150 photo edited Rp 750.000,00</option>
                                <option value="9" <?php if ($paket->jumlah_foto_edit == 'All photo edited') { ?> selected <?php } ?>>All photo edited Rp 1.000.000,00</option>
                            <?php } ?>
                            <option value="10" <?php if ($paket->jumlah_foto_edit == 'All photos edited tone') { ?> selected <?php } ?>>All photo edited tone Rp 1.200.000,00</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="hasil_videografi" class="form-label">Hasil Videografi</label>
                    <div class="input-group mb-3 col-6">
                        <select class="form-select" id="hasil_videografi">
                            <option value="1" <?php if ($paket->videografi == '') { ?> selected <?php } ?>>Tidak ada Rp 0,00</option>
                            <option value="2" <?php if ($paket->videografi == '1 minute cinematic video') { ?> selected <?php } ?>>1 minute cinematic video Rp 400.000,00</option>
                            <option value="3" <?php if ($paket->videografi == '1 minute video teaser') { ?> selected <?php } ?>>1 minute video teaser Rp 500.000,00</option>
                            <option value="4" <?php if ($paket->videografi == '1 minute video teaser & 3 minute video highlight') { ?> selected <?php } ?>>1 minute video teaser & 3 minute video highlight Rp 600.000,00</option>
                            <option value="5" <?php if ($paket->videografi == '3 minute cinematic video, video drone') { ?> selected <?php } ?>>3 minute cinematic video, video drone Rp 750.000,00</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 mb-20">
                    <div class="payment-details">
                        <h4 class="checkout-title">Paket yang dicustom</h4>
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
                                                    <?= $paket->nama_paket; ?>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="amount cart-price">
                                                        <?=
                                                        number_to_currency($paket->harga_paket, 'IDR', 'id_ID');
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
                    <button class="btn btn-primary btn-submit w-100" id="btnPesan" data-bs-toggle="modal" data-bs-target="#modalKonfirmasi">
                        Pesan sekarang
                    </button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Apakah pilihan sudah tepat?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            Nama Paket :</br>
                            <h5 id="namaPaketCustom">Paket Custom</h5>
                        </div>
                        <div class="col-12">
                            Harga paket awal:</br>
                            <h5><?= number_to_currency($paket->harga_paket, 'IDR', 'id_ID'); ?></h5>
                        </div>
                        <div class="col-12">
                            Harga setelah perubahan :</br>
                            <h5 id="hargaPaketCustom">Rp 0</h5>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Belum</button>
                    <button type="submit" class="btn btn-primary" id="btnSubmit">Pesan sekarang</button>
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
                                        <?= $paket->nama_paket; ?>
                                    </h5>
                                    <input id="input-rating" value="4.5" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5 disabled>
                                    <div class="portfolio-wrap">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="portfolio-info">
                                                    <ul>
                                                        <li>
                                                            <strong>Harga </strong>:
                                                            <?= number_to_currency($paket->harga_paket, 'IDR', 'id_ID'); ?>
                                                        </li>
                                                        <li><strong>Tenaga Kerja </strong>:

                                                            <?php if ($paket->fotografer != 0) { ?>
                                                                <?= $paket->fotografer ?>
                                                                Fotografer
                                                                <?php if ($paket->videografer != 0) { ?>
                                                                    <?= $paket->videografer ?> Videografer
                                                                <?php } ?>
                                                            <?php } ?>
                                                            <?php if ($paket->asisten != 0) { ?>
                                                                <?= $paket->asisten ?>
                                                                Asisten
                                                            <?php } ?>
                                                        </li>
                                                        <li>
                                                            <strong>Waktu kerja </strong>:
                                                            <?= $paket->waktu_kerja; ?>
                                                        </li>
                                                        <li>
                                                            <strong>Jumlah foto </strong>:
                                                            <?= $paket->jumlah_foto; ?>
                                                        </li>
                                                        <li>
                                                            <strong>Jumlah foto edit </strong>:
                                                            <?= $paket->jumlah_foto_edit; ?>
                                                        </li>
                                                        <li>
                                                            <strong>Cetak </strong>:
                                                            <?= $paket->cetak_foto; ?>
                                                        </li>
                                                        <?php if ($paket->videografi != '') { ?>
                                                            <li>
                                                                <strong>Videografi </strong>:
                                                                <?= $paket->videografi; ?>
                                                            </li>
                                                        <?php } ?>
                                                        <li>
                                                            <strong>Penyimpanan </strong>:
                                                            <?= $paket->penyimpanan; ?>
                                                        </li>
                                                        <li>
                                                            <strong>Deskripsi Paket </strong>:
                                                            <?= $paket->deskripsi_paket; ?>
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

<script type="text/javascript">
    jQuery(document).ready(function() {
        var nama_edit_foto = '';
        var nama_videografi = '';
        var harga_akhir = 0;
        const myModal = new bootstrap.Modal(document.getElementById('modalKonfirmasi'));

        // Dismiss the modal programmatically
        function dismissModalKonfirmasi() {
            myModal.hide();
        }
        $('#btnPesan').click(function() {
            let harga_paket_baru = <?= $paket->harga_paket; ?>;
            let harga_edit_foto = 0;
            let harga_edit_foto_lama = 0;
            let harga_videografi = 0;
            let harga_videografi_lama = 0;
            let hasil_foto_edit = document.getElementById('hasil_foto_edit').value;
            let hasil_videografi = document.getElementById('hasil_videografi').value;
            let nama_custom = document.getElementById('namaPaketCustom');
            let harga_custom = document.getElementById('hargaPaketCustom');

            //set harga hasil foto edit
            if (hasil_foto_edit == 1) {
                harga_edit_foto = 0;
                nama_edit_foto = 'Tidak ada';
            } else if (hasil_foto_edit == 2) {
                harga_edit_foto = 25000;
                nama_edit_foto = '5 photo edited';
            } else if (hasil_foto_edit == 3) {
                harga_edit_foto = 50000;
                nama_edit_foto = '10 photo edited';
            } else if (hasil_foto_edit == 4) {
                harga_edit_foto = 75000;
                nama_edit_foto = '15 foto edit';
            } else if (hasil_foto_edit == 5) {
                harga_edit_foto = 100000;
                nama_edit_foto = '20 photo edited';
            } else if (hasil_foto_edit == 6) {
                harga_edit_foto = 250000;
                nama_edit_foto = '50 photo edited';
            } else if (hasil_foto_edit == 7) {
                harga_edit_foto = 500000;
                nama_edit_foto = '100 photo edited';
            } else if (hasil_foto_edit == 8) {
                harga_edit_foto = 750000;
                nama_edit_foto = '150 photo edited';
            } else if (hasil_foto_edit == 9) {
                harga_edit_foto = 1000000;
                nama_edit_foto = 'All photo edited';
            } else if (hasil_foto_edit == 10) {
                harga_edit_foto = 1200000;
                nama_edit_foto = 'All photos edited tone';
            }

            //set harga lama hasil foto edit
            if ('<?= $paket->jumlah_foto_edit ?>' == '5 photo edited') {
                harga_edit_foto_lama = 25000;
            } else if ('<?= $paket->jumlah_foto_edit ?>' == '10 photo edited') {
                harga_edit_foto_lama = 50000;
            } else if ('<?= $paket->jumlah_foto_edit ?>' == '15 foto edit') {
                harga_edit_foto_lama = 75000;
            } else if ('<?= $paket->jumlah_foto_edit ?>' == '20 photo edited') {
                harga_edit_foto_lama = 100000;
            } else if ('<?= $paket->jumlah_foto_edit ?>' == '50 photo edited') {
                harga_edit_foto_lama = 250000;
            } else if ('<?= $paket->jumlah_foto_edit ?>' == '100 photo edited') {
                harga_edit_foto_lama = 500000;
            } else if ('<?= $paket->jumlah_foto_edit ?>' == '150 photo edited') {
                harga_edit_foto_lama = 750000;
            } else if ('<?= $paket->jumlah_foto_edit ?>' == 'All photo edited') {
                harga_edit_foto_lama = 1000000;
            } else if ('<?= $paket->jumlah_foto_edit ?>' == 'All photos edited tone') {
                harga_edit_foto_lama = 1200000;
            }

            harga_paket_baru = (harga_paket_baru - harga_edit_foto_lama) + harga_edit_foto;

            //set harga videografi
            if (hasil_videografi == 1) {
                harga_videografi = 0;
                nama_videografi = 'Tidak ada';
            } else if (hasil_videografi == 2) {
                harga_videografi = 400000;
                nama_videografi = '1 minute cinematic video';
            } else if (hasil_videografi == 3) {
                harga_videografi = 500000;
                nama_videografi = '1 minute video teaser';
            } else if (hasil_videografi == 4) {
                harga_videografi = 600000;
                nama_videografi = '1 minute video teaser & 3 minute video highlight';
            } else if (hasil_videografi == 5) {
                harga_videografi = 750000;
                nama_videografi = '3 minute cinematic video, video drone';
            }

            //set harga lama hasil foto edit
            if ('<?= $paket->videografi ?>' == '') {
                harga_videografi_lama = 0;
            } else if ('<?= $paket->videografi ?>' == '1 minute cinematic video') {
                harga_videografi_lama = 400000;
            } else if ('<?= $paket->videografi ?>' == '1 minute video teaser') {
                harga_videografi_lama = 500000;
            } else if ('<?= $paket->videografi ?>' == '1 minute video teaser & 3 minute video highlight') {
                harga_videografi_lama = 600000;
            } else if ('<?= $paket->videografi ?>' == '3 minute cinematic video, video drone') {
                harga_videografi_lama = 750000;
            }

            harga_paket_baru = (harga_paket_baru - harga_videografi_lama) + harga_videografi;

            harga_akhir = harga_paket_baru;

            //set nama paket di modal konfirmasi
            nama_custom.textContent = document.getElementById('nama_paket').value;

            //set harga custom di modal konfirmasi
            harga_custom.textContent = harga_paket_baru.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0
            });
        });
        $('#btnSubmit').click(function() {
            $.ajax({
                url: '<?= site_url('/paket/custom/' . $paket->id_paket) ?>',
                type: 'POST',
                data: {
                    nama_paket: document.getElementById('nama_paket').value,
                    edit_foto: nama_edit_foto,
                    videografi: nama_videografi,
                    harga_paket_baru: harga_akhir,
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'Berhasil!') {
                        Toastify({
                            text: response.status,
                            duration: 3000,
                            offset: {
                                x: 50,
                            },
                        }).showToast();
                        window.location.href = '<?= base_url('/checkout') ?>';
                    } else if (response.status == 'Belum login!') {
                        window.location.href = '<?= base_url('/login') ?>';
                    } else {
                        Toastify({
                            text: response.status,
                            duration: 3000,
                            offset: {
                                x: 50,
                            },
                        }).showToast();
                    }
                    dismissModalKonfirmasi();
                },
                error: function(response) {
                    dismissModalKonfirmasi();
                    console.log(response);
                    Toastify({
                        text: 'Coba lagi nanti!',
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

<?= $this->endSection() ?>