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
            <h2>Data Pesanan</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section class="contact">
        <div class="container" data-aos="fade-up">
            <form action="/checkout" method="post">
                <div class="row gy-4">
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                    </div>
                    <div class="col-lg-2">
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="telp" placeholder="nomor telpon" required>
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" name="catatan" rows="6" placeholder="Catatan" required></textarea>
                    </div>
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
                                                    <th sortable="false" class="text-center">Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <script type="text/javascript">
                                                    let totalPrice = 0;
                                                </script>
                                                <?php
                                                helper('number');
                                                $totalPrice;
                                                foreach ($pesananUserPakets as $key => $pesananUserPaket) : ?>
                                                    <tr class="pb-20 cart-row">
                                                        <td class="align-middle">
                                                            <?= $pesananUserPaket->nama_paket; ?>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <span class="amount cart-price-<?= $key ?>">
                                                                <?=
                                                                number_to_currency($pesananUserPaket->harga_paket, 'IDR', 'id_ID');
                                                                ?>
                                                            </span>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <button type="button" class="btn btn-sm btn-grey" id="btn-remove-<?= $key ?>">
                                                                <img class="inject-me" src="/assets/img/close.svg" alt="">
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <script type="text/javascript">
                                                        document.addEventListener('DOMContentLoaded', function() {

                                                            var cartTotalPrice = document.getElementById('cart-total-price');
                                                            var price = parseInt(<?= $pesananUserPaket->harga_paket; ?>);
                                                            totalPrice = totalPrice + price;

                                                            cartTotalPrice.textContent = totalPrice.toLocaleString("id-ID", {
                                                                style: "currency",
                                                                currency: "IDR",
                                                                minimumFractionDigits: 0
                                                            });

                                                            $(document).ready(function() {
                                                                $('#btn-remove-<?= $key ?>').click(function() {
                                                                    var row = $('#btn-remove-<?= $key ?>').closest('.cart-row');
                                                                    if (row) {
                                                                        // perform AJAX request here
                                                                        $.ajax({
                                                                            url: '<?= site_url('/checkout/remove') ?>',
                                                                            type: 'POST',
                                                                            data: {
                                                                                id_pesanan: <?= $pesananUserPaket->id_pesanan ?>,
                                                                            },
                                                                            success: function(response) {
                                                                                console.log(response);

                                                                                //decrease total with deleted paket
                                                                                totalPrice = totalPrice - price;
                                                                                cartTotalPrice.textContent = totalPrice.toLocaleString("id-ID", {
                                                                                    style: "currency",
                                                                                    currency: "IDR",
                                                                                    minimumFractionDigits: 0
                                                                                });;;

                                                                                row.remove();
                                                                            },
                                                                            error: function(response) {
                                                                                console.log(response);
                                                                            }
                                                                        });
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <div class="total-order">
                                            Order Total <h6 id="cart-total-price" class="float-none">Rp 0</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-primary btn-submit" type="submit" id="btnSubmit">
                            Kirim Pesanan
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