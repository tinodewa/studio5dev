<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" style="background: white;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <img src="/assets/img/newlogo2.png" alt="">
            <span>STUDIO 5</span>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="/">Tentang</a></li>
                <li><a class="nav-link scrollto" href="/">Paket</a></li>
                <li><a class="nav-link scrollto" href="/">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="/">F.A.Q</a></li>
                <li><a class="nav-link scrollto" href="/">Testimoni</a></li>
                <li><a class="nav-link scrollto" href="/">Kontak</a></li>
                <li><a class="nav-link scrollto" href="https://wa.me/6285156443674">Konsultasi</a></li>
                <?php
                if (isset($_SESSION['logged_in'])) {
                ?>
                    <li class="dropdown"><a href="#"><span><i class="bi bi-person-circle"></i> <?php echo $_SESSION['nama_lengkap'] ?></span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Profil</a></li>
                            <li><a href="/list-pesanan">List Pesanan</a></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>
                <?php
                } else {
                    echo '<li><a class="getstarted scrollto" href="/login">LOGIN</a></li>';
                }

                ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
<!-- End Header -->