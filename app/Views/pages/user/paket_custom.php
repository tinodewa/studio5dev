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
            <form action="/paket/custom/<?= $paket->id_paket; ?>" method="post">
                <div class="row gy-4">
                    <div class="col-md-12">
                        <label class="form-label">Nama Paket</label>
                        <input type="text" class="form-control" name="nama_paket" placeholder="Nama Paket" <?php if ($paket->nama_paket != null) { ?> value="Custom <?= $paket->nama_paket ?>" <?php } else { ?> value="" <?php } ?> required>
                    </div>
                    <div class="col-md-6">
                        <label for="hasil_foto_edit" class="form-label">Hasil Edit Foto</label>
                        <!-- <div class="input-group mb-3 col-6">
                            <div class="input-group-text">
                                <input class="form-check-input" type="checkbox" id="hasilEditBox">
                            </div>
                            <select class="form-select" id="hasil_foto_edit" disabled>
                                <option value="1">Tidak ada Rp 0.000,00</option>
                                <option value="2">5 foto edit Rp 25.000,00</option>
                                <option value="3">10 foto edit Rp 50.000,00</option>
                                <option value="4">15 foto edit Rp 75.000,00</option>
                                <option value="5">20 foto edit Rp 100.000,00</option>
                                <option value="6">50 photo edited Rp 250.000,00</option>
                                ?php if (str_contains($paket->jumlah_foto, "Unlimited photo") || str_contains($paket->jumlah_foto, "Unlimited")) { ?>
                                    <option value="7">100 photo edited Rp 500.000,00</option>
                                    <option value="8">150 photo edited Rp 750.000,00</option>
                                    <option value="9">All photo edited Rp 1.000.000,00</option>
                                ?php } ?>
                                <option value="10">All photo edited tone Rp 1.200.000,00</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="hasil_videografi" class="form-label">Hasil Videografi</label>
                        <div class="input-group mb-3 col-6">
                            <div class="input-group-text">
                                <input class="form-check-input" type="checkbox" id="magazineBox">
                            </div>
                            <select class="form-select" id="hasil_videografi" disabled>
                                <option value="1">Tidak ada Rp 0.000,00</option>
                                <option value="2">1 minute cinematic video Rp 400.000,00</option>
                                <option value="3">1 minute video teaser Rp 500.000,00</option>
                                <option value="4">1 minute video teaser & 3 minute video highlight Rp 600.000,00</option>
                                <option value="5">3 minute cinematic video, video drone Rp 750.000,00</option>
                            </select>
                        </div>
                    </div> -->
                        <div class="col-sm-4">
                            <label class="form-label">Fotografer (Rp 200.000,00/orang)</label>
                            <input type="number" class="form-control" name="jumlah_fotografer" placeholder="Jumlah Fotografer" <?php if ($paket->fotografer >= 0) { ?> value="?= $paket->fotografer ?>" <?php } else { ?> value="0" <?php } ?> oninput="this.value = Math.abs(this.value)" required>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label">Videografer (Rp 300.000,00/orang)</label>
                            <input type="number" class="form-control" name="jumlah_videografer" placeholder="Jumlah Videografer" <?php if ($paket->videografer >= 0) { ?> value="?= $paket->videografer ?>" <?php } else { ?> value="0" <?php } ?> oninput="this.value = Math.abs(this.value)" required>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label">Asisten (Rp 150.000,00/orang)</label>
                            <input type="number" class="form-control" name="jumlah_asisten" placeholder="Jumlah Asisten" <?php if ($paket->asisten >= 0) { ?> value="?= $paket->asisten ?>" <?php } else { ?> value="0" <?php } ?> oninput="this.value = Math.abs(this.value)" required>
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
                            <button class="btn btn-primary btn-submit" id="btnPesan">
                                Pesan sekarang
                            </button>
                            <!-- <button class="btn btn-primary btn-submit w-100" id="btnPesan" data-bs-toggle="modal" data-bs-target="#modalKonfirmasi">
                            Checkout
                        </button> -->
                        </div>
                    </div>
            </form>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- modal konfirmasi -->
    <!-- <div class="modal fade" id="modalKonfirmasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <h5>?= $pesananUserPaket[0]->nama_paket; ?></h5>
                        </div>
                        <div class="col-12">
                            Harga paket awal:</br>
                            <h5>?= number_to_currency($paket->harga_paket, 'IDR', 'id_ID'); ?></h5>
                        </div>
                        <div class="col-12">
                            Harga setelah perubahan :</br>
                            <h5 id="hargaCustom">Rp 0</h5>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Belum</button>
                    <button type="submit" class="btn btn-primary" id="btnSubmit">Pesan sekarang</button>
                </div>
            </div>
        </div>
    </div> -->
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

<?= $this->endSection() ?>