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
<?= $this->include('pages/user/layout/user_navbar.php') ?>

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
            <form action="/paket/custom" method="post">
                <div class="row gy-4">
                    <div class="col-md-12">
                        <label class="form-label">Nama Paket</label>
                        <input type="text" class="form-control" name="nama_paket" placeholder="Nama Paket" <?php if ($paket->nama_paket != null) { ?> value="Custom <?= $paket->nama_paket ?>" <?php } else { ?> value="" <?php } ?> required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Jumlah Fotografer</label>
                        <input type="number" class="form-control" name="jumlah_fotografer" placeholder="Jumlah Fotografer" <?php if ($paket->fotografer >= 0) { ?> value="<?= $paket->fotografer ?>" <?php } else { ?> value="0" <?php } ?> required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Jumlah Videografer</label>
                        <input type="number" class="form-control" name="jumlah_videografer" placeholder="Jumlah Videografer" <?php if ($paket->videografer >= 0) { ?> value="<?= $paket->videografer ?>" <?php } else { ?> value="0" <?php } ?> required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Waktu Liputan (Dalam Jam)</label>
                        <input type="number" class="form-control" name="waktu_liputan" placeholder="Waktu Liputan" <?php if ($paket->waktu >= 0) { ?> value="<?= $paket->waktu ?>" <?php } else { ?> value="0" <?php } ?> required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Jumlah Tempat Indoor</label>
                        <input type="number" class="form-control" name="jumlah_indoor" placeholder="Jumlah Tempat Indoor" <?php if ($paket->tempat_indoor >= 0) { ?> value="<?= $paket->tempat_indoor ?>" <?php } else { ?> value="0" <?php } ?> required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Jumlah Tempat Outdoor</label>
                        <input type="number" class="form-control" name="jumlah_outdoor" placeholder="Jumlah Tempat Outdoor" <?php if ($paket->tempat_outdoor >= 0) { ?> value="<?= $paket->tempat_outdoor ?>" <?php } else { ?> value="0" <?php } ?> required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Jumlah Hasil Foto Yang Dicetak</label>
                        <input type="number" class="form-control" name="hasil_jumlah" placeholder="Jumlah Hasil Foto" <?php if ($paket->hasil_jumlah >= 0) { ?> value="<?= $paket->hasil_jumlah ?>" <?php } else { ?> value="0" <?php } ?> required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Jumlah Hasil Foto Yang Diedit</label>
                        <input type="number" class="form-control" name="hasil_editing" placeholder="Jumlah Hasil Editing" <?php if ($paket->hasil_editing >= 0) { ?> value="<?= $paket->hasil_editing ?>" <?php } else { ?> value="0" <?php } ?> required>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary btn-submit" type="submit" id="btnSubmit">
                            Checkout Pesanan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->
<?= $this->include('pages/user/layout/user_footer.php') ?>

<?= $this->endSection() ?>