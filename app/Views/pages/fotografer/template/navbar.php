<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" style="background: white;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <img src="/assets/img/newlogo2.png" alt="">
            <!-- <span>STUDIO 5</span> -->
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown"><a href="#"><span><i class="bi bi-person-circle"></i> <?php echo $_SESSION['nama_lengkap'] ?></span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/fotografer/profil">Profil</a></li>
                        <li><a href="/fotografer">List Pesanan</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->