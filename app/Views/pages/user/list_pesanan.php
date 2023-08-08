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
            <h2 class="mb-0">Data Pesanan</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <?php if ($listPesanans == null) { ?>
        <!-- lottiefiles empty -->
        <div>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_qh5z2fdq.json" background="transparent" speed="1" style="width: 300px; height: 300px;margin: 0 auto;" autoplay></lottie-player>
        </div>
    <?php } else { ?>
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
                                                    <th sortable="false">Harga</th>
                                                    <th sortable="false">Tanggal Mulai</th>
                                                    <th sortable="false">Tanggal Selesai</th>
                                                    <th sortable="false" class="text-center">Status</th>
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
                                                            <span class="amount cart-price-<?= $key ?>">
                                                                <?=
                                                                number_to_currency($listPesanan->jumlah_bayar, 'IDR', 'id_ID');
                                                                ?>
                                                            </span>
                                                        </td>
                                                        <td class="align-middle">
                                                            <?= $listPesanan->tanggal_mulai; ?>
                                                        </td>
                                                        <td class="align-middle">
                                                            <?= $listPesanan->tanggal_selesai; ?>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <?php if (str_contains($listPesanan->status, "sudah review")) { ?>
                                                                <button type="button" class="btn btn-success" disabled>Done</button>
                                                            <?php } else if (str_contains($listPesanan->status, "belum review")) { ?>
                                                                <button type="button" class="btn btn-primary" disabled>Done</button>
                                                            <?php } else if (str_contains($listPesanan->status, "expire")) { ?>
                                                                <button type="button" class="btn btn-dark" disabled><?= $listPesanan->status; ?></button>
                                                            <?php } else if (str_contains($listPesanan->status, "dalam proses")) { ?>
                                                                <button type="button" class="btn btn-info" disabled><?= $listPesanan->status; ?></button>
                                                            <?php } else if (str_contains($listPesanan->status, "cancel")) { ?>
                                                                <button type="button" class="btn btn-danger" disabled><?= $listPesanan->status; ?></button>
                                                            <?php } else { ?>
                                                                <button type="button" class="btn btn-warning" disabled><?= $listPesanan->status; ?></button>
                                                            <?php } ?>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <a class="btn btn-sm btn-grey" href="/list-pesanan/<?= $listPesanan->id_pesanan; ?>/detail">
                                                                Cek
                                                            </a>
                                                            <?php if (str_contains($listPesanan->status, "belum")) { ?>
                                                                <button id="buttonReview<?= $key ?>" type="button" class="btn btn-sm btn-grey" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $key ?>">
                                                                    Review
                                                                </button>
                                                            <?php } ?>
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
        <?php foreach ($listPesanans as $key => $listPesanan) : ?>
            <!-- Modal -->
            <?php if (str_contains($listPesanan->status, "belum")) { ?>
                <div class="modal fade" id="exampleModal<?= $key ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="#">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Review</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- star rating -->
                                    <input id="input-rating<?= $key ?>" value="0" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.5>

                                    <textarea class="form-control" id="deskripsiUlasan<?= $key ?>" name="ulasan" rows="4" placeholder="Ulasan" required></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <a href="#testimonials" id="simpanUlasan<?= $key ?>" class="btn btn-primary col-4">
                                        <span id="simpanText<?= $key ?>">Simpan</span>
                                        <div id="simpanLoading<?= $key ?>" class="spinner-border text-light col-4 d-none" role="status">
                                            <span class="sr-only"></span>
                                        </div>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    var nilaiUlasan = 0;
                    var deskripsiUlasan = document.getElementById('deskripsiUlasan<?= $key ?>');
                    var simpanText = document.getElementById("simpanText<?= $key ?>");
                    var simpanLoading = document.getElementById("simpanLoading<?= $key ?>");
                    var anchorBtn = document.getElementById('simpanUlasan<?= $key ?>');
                    $('#input-rating<?= $key ?>').on('rating:change', function(event, value, caption) {
                        nilaiUlasan = value;
                    });
                    $('#simpanUlasan<?= $key ?>').on('click', function(e) {
                        e.preventDefault();
                        simpanText.classList.add("d-none");
                        simpanLoading.classList.remove("d-none");
                        anchorBtn.disabled = true;

                        $.ajax({
                            url: '<?= site_url('/list-pesanan/simpan-ulasan') ?>',
                            type: 'POST',
                            data: {
                                id_paket: <?= $listPesanan->id_paket ?>,
                                rating: nilaiUlasan,
                                deskripsi: deskripsiUlasan.value,
                                id_pembayaran: <?= $listPesanan->id_pembayaran ?>
                            },
                            success: function(response) {
                                anchorBtn.disabled = false;
                                simpanText.classList.remove("d-none");
                                simpanLoading.classList.add("d-none");
                                Toastify({
                                    text: "Berhasil!",
                                    duration: 3000
                                }).showToast();
                                $('#exampleModal<?= $key ?>').modal('hide');
                                console.log(response);
                                location.reload();
                            },
                            error: function() {
                                Toastify({
                                    text: "Gagal!",
                                    duration: 3000
                                }).showToast();
                            }
                        })
                    });
                });
            </script>
        <?php endforeach; ?>
    <?php } ?>


</main>
<!-- End #main -->
<?= $this->include('pages/user/template/footer.php') ?>

<?= $this->endSection() ?>