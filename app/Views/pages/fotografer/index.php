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
            <h2>Data Pesanan Pelanggan</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section class="contact">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-12 mb-20">
                    <div class="payment-details">
                        <div class="cart-area">
                            <div class="cart-table-content wishlist-wrap">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead aria-disabled="true">
                                            <tr>
                                                <th sortable="false">ID</th>
                                                <th sortable="false">Paket</th>
                                                <th sortable="false">Nama Pemesan</th>
                                                <th sortable="false">Harga</th>
                                                <th sortable="false">Tanggal</th>
                                                <th sortable="false">Status</th>
                                                <th sortable="false" class="text-center">Kontrol</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            helper('number');
                                            $totalPrice;
                                            foreach ($listPesanans as $key => $listPesanan) : ?>
                                                <tr class="pb-20 cart-row">
                                                    <td class="align-middle">
                                                        <?= $listPesanan->id_pesanan; ?>
                                                    </td>
                                                    <td class="align-middle">
                                                        <?= $listPesanan->nama_paket; ?>
                                                    </td>
                                                    <td class="align-middle">
                                                        <?= $listPesanan->nama_lengkap; ?>
                                                    </td>
                                                    <td class="align-middle">
                                                        <span class="amount cart-price-<?= $key ?>">
                                                            <?=
                                                            number_to_currency($listPesanan->jumlah_bayar, 'IDR', 'id_ID');
                                                            ?>
                                                        </span>
                                                    </td>
                                                    <td class="align-middle">
                                                        <?= $listPesanan->tanggal; ?>
                                                    </td>
                                                    <td class="align-middle">
                                                        <?php if (str_contains($listPesanan->status, "sudah review")) { ?>
                                                            <button type="button" class="btn btn-success" disabled>Done</button>
                                                        <?php } else if (str_contains($listPesanan->status, "belum review")) { ?>
                                                            <button type="button" class="btn btn-primary" disabled>Done</button>
                                                        <?php } else if (str_contains($listPesanan->status, "expire")) { ?>
                                                            <button type="button" class="btn btn-dark" disabled><?= $listPesanan->status; ?></button>
                                                        <?php } else if (str_contains($listPesanan->status, "dalam proses")) { ?>
                                                            <button type="button" class="btn btn-info" disabled><?= $listPesanan->status; ?></button>
                                                        <?php } else { ?>
                                                            <button type="button" class="btn btn-warning" disabled><?= $listPesanan->status; ?></button>
                                                        <?php } ?>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <a class="btn btn-sm btn-grey" href="/fotografer/pesanan/<?= $listPesanan->id_pesanan; ?>/detail">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->
<?= $this->include('pages/fotografer/template/footer.php') ?>

<?= $this->endSection() ?>