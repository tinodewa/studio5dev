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
<?= $this->include('pages/fotografer/template/navbar.php') ?>

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <h2>Detail Pesanan Pelanggan</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section class="contact">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-md-12">
                    <label class="form-label">Nama Paket</label>
                    <input type="text" class="form-control" name="nama_paket" placeholder="Nama Paket" value="<?= $detailPesanan[0]->nama_paket ?>" disabled>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="Harga" value="<?= $detailPesanan[0]->harga_paket ?>" disabled>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Status</label>
                    <input type="text" class="form-control" name="status" placeholder="Status" value="<?= $detailPesanan[0]->status ?>" disabled>
                </div>
                <?php if ($detailPesanan[0]->fotografer > 0) { ?>
                    <div class="col-md-12">
                        <label class="form-label">Jumlah Fotografer</label>
                        <input type="number" class="form-control" name="jumlah_fotografer" placeholder="Jumlah Fotografer" value="<?= $detailPesanan[0]->fotografer ?>" disabled>
                    </div>
                <?php } ?>
                <?php if ($detailPesanan[0]->videografer > 0) { ?>
                    <div class="col-md-12">
                        <label class="form-label">Jumlah Videografer</label>
                        <input type="number" class="form-control" name="jumlah_videografer" placeholder="Jumlah Videografer" value="<?= $detailPesanan[0]->videografer ?>" disabled>
                    </div>
                <?php } ?>
                <div class="col-md-12">
                    <label class="form-label">Waktu Liputan (Dalam Jam)</label>
                    <input type="number" class="form-control" name="waktu_liputan" placeholder="Waktu Liputan" value="<?= $detailPesanan[0]->waktu ?>" disabled>
                </div>
                <?php if ($detailPesanan[0]->tempat_indoor > 0) { ?>
                    <div class="col-md-12">
                        <label class="form-label">Jumlah Tempat Indoor</label>
                        <input type="number" class="form-control" name="jumlah_indoor" placeholder="Jumlah Tempat Indoor" value="<?= $detailPesanan[0]->tempat_indoor ?>" disabled>
                    </div>
                <?php } ?>
                <?php if ($detailPesanan[0]->tempat_outdoor > 0) { ?>
                    <div class="col-md-12">
                        <label class="form-label">Jumlah Tempat Outdoor</label>
                        <input type="number" class="form-control" name="jumlah_outdoor" placeholder="Jumlah Tempat Outdoor" value="<?= $detailPesanan[0]->tempat_outdoor ?>" disabled>
                    </div>
                <?php } ?>
                <div class="col-md-12">
                    <label class="form-label">Jumlah Hasil Foto Yang Dicetak</label>
                    <input type="number" class="form-control" name="hasil_jumlah" placeholder="Jumlah Hasil Foto" value="<?= $detailPesanan[0]->hasil_jumlah ?>" disabled>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Jumlah Hasil Foto Yang Diedit</label>
                    <input type="number" class="form-control" name="hasil_editing" placeholder="Jumlah Hasil Editing" value="<?= $detailPesanan[0]->hasil_editing ?>" disabled>
                </div>
                <?php if ($detailPesanan[0]->status == 'sudah upload bukti' || $detailPesanan[0]->status == 'done') { ?>
                    <div class="col-md-12">
                        <label class="form-label">Bukti Pembayaran</label>
                        <input type="text" class="form-control" name="jumlah_outdoor" placeholder="Bukti Pembayaran" value="<?= $detailPesanan[0]->bukti ?>" disabled>
                    </div>
                <?php } ?>
                <?php if ($detailPesanan[0]->status == 'done') { ?>
                    <div class="col-md-12">
                        <label class="form-label">Link Hasil Foto</label>
                        <input type="text" class="form-control" name="Link Hasil Foto" placeholder="Link Hasil Foto" value="<?= $hasilFoto[0]->hasil_foto ?>" disabled>
                    </div>
                <?php } ?>
                <?php if ($detailPesanan[0]->status != "done" && $detailPesanan[0]->status != "belum dibayar") { ?>
                    <form action="/fotografer/pesanan/<?= $detailPesanan[0]->id_pesanan ?>/detail/simpan" method="post">
                        <div class="col-md-12">
                            <label class="form-label">Link Hasil Foto (Link Google Drive & full akses ke semua orang)</label>
                            <input type="text" class="form-control" name="hasil_foto" placeholder="Link Hasil Foto" value="<?php if ($hasilFoto != null) {
                                                                                                                                echo $hasilFoto[0]->hasil_foto;
                                                                                                                            } else {
                                                                                                                                echo "";
                                                                                                                            } ?>" required>
                            <input type="text" class="form-control d-none" name="id_hasil_foto" placeholder="Link Hasil Foto" value="<?= $hasilFoto[0]->id_hasil_foto ?>">
                        </div>
                        <div class="col-md-12 text-center mt-4">
                            <button class="btn btn-primary btn-submit" type="submit" id="btnSubmit">
                                Simpan
                            </button>
                        </div>
                    </form>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->
<?= $this->include('pages/fotografer/template/footer.php') ?>

<?= $this->endSection() ?>