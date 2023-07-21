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
                    <label class="form-label">Status</label>
                    <?php if (str_contains($detailPesanan[0]->status, "sudah review")) { ?>
                        <button type="button" class="btn btn-success" disabled>Done</button>
                    <?php } else if (str_contains($detailPesanan[0]->status, "belum review")) { ?>
                        <button type="button" class="btn btn-primary" disabled>Done</button>
                    <?php } else if (str_contains($detailPesanan[0]->status, "expire")) { ?>
                        <button type="button" class="btn btn-dark" disabled><?= $detailPesanan[0]->status; ?></button>
                    <?php } else if (str_contains($detailPesanan[0]->status, "dalam proses")) { ?>
                        <button type="button" class="btn btn-info" disabled><?= $detailPesanan[0]->status; ?></button>
                    <?php } else if (str_contains($detailPesanan[0]->status, "cancel")) { ?>
                        <button type="button" class="btn btn-danger" disabled><?= $detailPesanan[0]->status; ?></button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-warning" disabled><?= $detailPesanan[0]->status; ?></button>
                    <?php } ?>
                </div>
                <?php if ($detailPesanan[0]->status != "expire" && $detailPesanan[0]->status != "pending") { ?>
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
                <div class="col-md-12">
                    <label class="form-label">Nama Paket</label>
                    <input type="text" class="form-control" name="nama_paket" placeholder="Nama Paket" value="<?= $detailPesanan[0]->nama_paket ?>" disabled>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Order ID</label>
                    <input type="text" class="form-control col-6" name="order_id" placeholder="Order ID" value="<?= $detailPesanan[0]->order_id ?>" disabled>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Transaksi</label>
                    <button type="button" class="form-control btn btn-info col-6" data-bs-toggle="modal" data-bs-target="#transaksiModal">Detail</button>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Harga Paket</label>
                    <input type="number" class="form-control" name="harga" placeholder="Harga" value="<?= $detailPesanan[0]->harga_paket ?>" disabled>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Harga Total</label>
                    <input type="number" class="form-control" name="harga" placeholder="Harga" value="<?= $detailPesanan[0]->jumlah_bayar ?>" disabled>
                </div>
                <?php if ($detailPesanan[0]->fotografer > 0) { ?>
                    <div class="col-md-6">
                        <label class="form-label">Jumlah Fotografer</label>
                        <input type="number" class="form-control" name="jumlah_fotografer" placeholder="Jumlah Fotografer" value="<?= $detailPesanan[0]->fotografer ?> orang" disabled>
                    </div>
                <?php } ?>
                <?php if ($detailPesanan[0]->videografer > 0) { ?>
                    <div class="col-md-6">
                        <label class="form-label">Jumlah Videografer</label>
                        <input type="number" class="form-control" name="jumlah_videografer" placeholder="Jumlah Videografer" value="<?= $detailPesanan[0]->videografer ?> orang" disabled>
                    </div>
                <?php } ?>
                <?php if ($detailPesanan[0]->asisten > 0) { ?>
                    <div class="col-md-6">
                        <label class="form-label">Jumlah Asisten</label>
                        <input type="number" class="form-control" name="jumlah_asisten" placeholder="Jumlah asisten" value="<?= $detailPesanan[0]->asisten ?> orang" disabled>
                    </div>
                <?php } ?>
                <div class="col-md-6">
                    <label class="form-label">Tanggal</label>
                    <input type="text" class="form-control" name="tanggal" placeholder="Tanggal" value="<?= $detailPesanan[0]->tanggal ?>" disabled>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Waktu Kerja</label>
                    <input type="text" class="form-control" name="waktu_liputan" placeholder="Waktu Liputan" value="<?= $detailPesanan[0]->waktu_kerja ?>" disabled>
                </div>
                <?php if ($detailPesanan[0]->extra_waktu_kerja > 0) { ?>
                    <div class="col-md-6">
                        <label class="form-label">Extra Waktu Kerja</label>
                        <input type="text" class="form-control" name="extra_waktu_kerja" placeholder="Extra waktu Kerja" value="<?= $detailPesanan[0]->extra_waktu_kerja ?> jam" disabled>
                    </div>
                <?php } ?>
                <?php if ($detailPesanan[0]->extra_premium_magazine > 0) { ?>
                    <div class="col-md-6">
                        <label class="form-label">Extra Hasil Cetak</label>
                        <input type="text" class="form-control" name="extra_premium_magazine" placeholder="Extra Hasil Cetak" value="<?= $detailPesanan[0]->extra_premium_magazine ?>" disabled>
                    </div>
                <?php } ?>
                <?php if ($detailPesanan[0]->extra_background > 0) { ?>
                    <div class="col-md-6">
                        <label class="form-label">Extra Background</label>
                        <input type="text" class="form-control" name="extra_background" placeholder="Extra Background" value="<?= $detailPesanan[0]->extra_background ?> set" disabled>
                    </div>
                <?php } ?>
                <?php if ($detailPesanan[0]->extra_orang > 0) { ?>
                    <div class="col-md-6">
                        <label class="form-label">Extra Orang</label>
                        <input type="text" class="form-control" name="extra_orang" placeholder="Extra waktu Kerja" value="<?= $detailPesanan[0]->extra_orang ?> orang" disabled>
                    </div>
                <?php } ?>
                <div class="col-md-6">
                    <label class="form-label">Jumlah Foto</label>
                    <input type="text" class="form-control" name="jumlah_foto" placeholder="Jumlah Hasil Foto" value="<?= $detailPesanan[0]->jumlah_foto ?>" disabled>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Jumlah Foto Yang Diedit</label>
                    <input type="text" class="form-control" name="jumlah_foto_edit" placeholder="Jumlah Hasil Foto Edit" value="<?= $detailPesanan[0]->jumlah_foto_edit ?>" disabled>
                </div>
                <?php if ($detailPesanan[0]->cetak_foto != '') { ?>
                    <div class="col-md-6">
                        <label class="form-label">Foto Yang Dicetak</label>
                        <input type="text" class="form-control" name="cetak_foto" placeholder="Foto Yang Dicetak" value="<?= $detailPesanan[0]->cetak_foto ?>" disabled>
                    </div>
                <?php } ?>
                <?php if ($detailPesanan[0]->videografi != '') { ?>
                    <div class="col-md-6">
                        <label class="form-label">Videografi</label>
                        <input type="text" class="form-control" name="videografi" placeholder="Videografi" value="<?= $detailPesanan[0]->videografi ?>" disabled>
                    </div>
                <?php } ?>
                <div class="col-md-6">
                    <label class="form-label">Penyimpanan</label>
                    <input type="text" class="form-control" name="penyimpanan" placeholder="Penyimpanan" value="<?= $detailPesanan[0]->penyimpanan ?>" disabled>
                </div>
                <?php if ($detailPesanan[0]->catatan != '') { ?>
                    <div class="col-md-6">
                        <label class="form-label">Catatan</label>
                        <input type="text" class="form-control" name="catatan" placeholder="Catatan" value="<?= $detailPesanan[0]->catatan ?>" disabled>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->


    <!-- modal detail transaksi -->
    <div class="modal fade" id="transaksiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Transaksi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <label class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="nama_paket" placeholder="Jumlah" value="<?= $transaksi->gross_amount ?>" disabled>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Tipe pembayaran</label>
                            <input type="text" class="form-control" name="tipe" placeholder="Jumlah" value="<?= $transaksi->payment_type ?>" disabled>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Status</label>
                            <input type="text" class="form-control" name="status" placeholder="Jumlah" value="<?= $transaksi->transaction_status ?>" disabled>
                        </div>
                        <?php if (isset($transaksi->permata_va_number)) : ?>
                            <div class="col-md-12">
                                <label class="form-label">Bank</label>
                                <input type="text" class="form-control" name="bank" placeholder="Jumlah" value="Permata" disabled>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Virtual Account</label>
                                <div class="row">
                                    <div class="col-10">
                                        <input type="text" class="form-control" id="virtual_account" name="virtual_account" placeholder="Jumlah" value="<?= $transaksi->permata_va_number ?>" disabled>
                                    </div>
                                    <div class="col-2">
                                        <button class="form-control" id="copyClipboard"><i class="bi bi-clipboard"></i></button>
                                    </div>
                                </div>
                            </div>
                        <?php elseif ($transaksi->payment_type == 'qris') : ?>
                            <div class="col-md-12">
                                <label class="form-label">Merchant</label>
                                <input type="text" class="form-control" name="bank" placeholder="Jumlah" value="Gopay" disabled>
                            </div>
                        <?php elseif ($transaksi->payment_type == 'echannel') : ?>
                            <div class="col-md-12">
                                <label class="form-label">Bank</label>
                                <input type="text" class="form-control" name="bank" placeholder="Jumlah" value="Mandiri" disabled>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Virtual Account</label>
                                <div class="row">
                                    <div class="col-10">
                                        <input type="text" class="form-control" id="virtual_account" name="virtual_account" placeholder="Jumlah" value="<?= $transaksi->bill_key ?>" disabled>
                                    </div>
                                    <div class="col-2">
                                        <button class="form-control" id="copyClipboard"><i class="bi bi-clipboard"></i></button>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="col-md-12">
                                <label class="form-label">Bank</label>
                                <input type="text" class="form-control" name="bank" placeholder="Jumlah" value="<?= $transaksi->va_numbers[0]->bank ?>" disabled>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Virtual Account</label>
                                <div class="row">
                                    <div class="col-10">
                                        <input type="text" class="form-control" id="virtual_account" name="virtual_account" placeholder="Jumlah" value="<?= $transaksi->va_numbers[0]->va_number ?>" disabled>
                                    </div>
                                    <div class="col-2">
                                        <button class="form-control" id="copyClipboard"><i class="bi bi-clipboard"></i></button>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-md-12">
                            <label class="form-label">Kadaluarsa</label>
                            <input type="text" class="form-control" name="kadaluarsa" placeholder="Jumlah" value="<?= $transaksi->expiry_time ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End #main -->
<?= $this->include('pages/fotografer/template/footer.php') ?>

<script type="text/javascript">
    jQuery(document).ready(function() {
        $('#copyClipboard').click(function() {
            // Get the text field
            var copyText = document.getElementById("virtual_account");

            // Select the text field
            copyText.select();

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            Toastify({
                text: "Berhasil di copy!",
                duration: 2000,
                offset: {
                    x: 50,
                },
            }).showToast();
        });
    });
</script>

<?= $this->endSection() ?>