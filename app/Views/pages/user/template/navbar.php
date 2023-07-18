<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" style="background: white;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <img src="/assets/img/newlogo2.png" alt="">
            
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <?php if (esc($title) == "Beranda") { ?>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Paket</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#faq">F.A.Q</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Ulasan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="nav-link scrollto" href="https://wa.me/6289512297569">Konsultasi</a></li>
                <?php } else { ?>
                    <li><a class="nav-link scrollto" href="/">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="/">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="/">Paket</a></li>
                    <li><a class="nav-link scrollto" href="/">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="/">F.A.Q</a></li>
                    <li><a class="nav-link scrollto" href="/">Ulasan</a></li>
                    <li><a class="nav-link scrollto" href="/">Kontak</a></li>
                    <li><a class="nav-link scrollto" href="https://wa.me/6289512297569">Konsultasi</a></li>
                <?php } ?>
                <?php
                if (isset($_SESSION['logged_in'])) {
                ?>
                    <li class="dropdown"><a href="#"><span><i class="bi bi-person-circle"></i> <?php echo $_SESSION['nama_lengkap'] ?></span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/profil">Profil</a></li>
                            <li><a href="/list-pesanan">List Pesanan</a></li>
                            <li><a href="" id="checkout">Keranjang</a></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            $('#checkout').click(function(e) {
                                e.preventDefault();
                                $.ajax({
                                    url: '<?= site_url('/check') ?>',
                                    type: 'POST',
                                    success: function(response) {
                                        if (response.status == 'Belum ada pesanan!') {
                                            Toastify({
                                                text: response.status,
                                                duration: 3000
                                            }).showToast();
                                        } else {
                                            window.location.href = '<?= base_url('/checkout') ?>';
                                        }
                                    },
                                    error: function(response) {
                                        console.log(response);
                                    }
                                });
                            });
                        });
                    </script>
                <?php
                } else {
                    echo '<li><a class="getstarted getstarted-btn scrollto" href="/login">Sign In</a></li>';
                }
                ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
<!-- End Header -->