<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">S</span><span class="text-primary">J</span>
                </span>
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="index.html">
                        <span class="font-size-xl text-dual-primary-dark">Studio </span><span class="font-size-xl text-primary">Jingga</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->

        <!-- Side User -->
        <div class="content-side content-side-full content-side-user px-10 align-parent">
            <!-- Visible only in mini mode -->
            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="<?= base_url('assets/admin/media/avatars/avatar15.jpg') ?>" alt="">
            </div>
            <!-- END Visible only in mini mode -->

            <!-- Visible only in normal mode -->
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="be_pages_generic_profile.html">
                    <img class="img-avatar" src="<?= base_url('assets/admin/media/avatars/avatar15.jpg') ?>" alt="">
                </a>
                <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="be_pages_generic_profile.html"><?php echo $_SESSION['nama_lengkap'] ?></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark" href="/logout">
                            <i class="si si-logout"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li>
                    <a href="/admin" class="<?php if (str_contains(esc($title), "Beranda")) {
                                                echo 'active';
                                            }  ?>">
                        <i class="si si-cup"></i><span class="sidebar-mini-hide">Beranda</span>
                    </a>
                </li>
                <li class="nav-main-heading">
                    <span class="sidebar-mini-visible">DB</span><span class="sidebar-mini-hidden">Database</span>
                </li>
                <li>
                    <a href="/admin/user" class="<?php if (str_contains(esc($title), "User")) {
                                                        echo 'active';
                                                    }  ?>">
                        <i class="si si-layers"></i><span class="sidebar-mini-hide">User</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/paket" class="<?php if (str_contains(esc($title), "Paket")) {
                                                        echo 'active';
                                                    }  ?>">
                        <i class="si si-layers"></i><span class="sidebar-mini-hide">Paket</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/pesanan" class="<?php if (str_contains(esc($title), "Pesanan")) {
                                                        echo 'active';
                                                    }  ?>">
                        <i class="si si-layers"></i><span class="sidebar-mini-hide">Pesanan</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/pembayaran" class="<?php if (str_contains(esc($title), "Pembayaran")) {
                                                            echo 'active';
                                                        }  ?>">
                        <i class="si si-layers"></i><span class="sidebar-mini-hide">Pembayaran</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/ulasan" class="<?php if (str_contains(esc($title), "Ulasan")) {
                                                        echo 'active';
                                                    }  ?>">
                        <i class="si si-layers"></i><span class="sidebar-mini-hide">Ulasan</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/hasil-foto" class="<?php if (str_contains(esc($title), "Hasil Foto")) {
                                                            echo 'active';
                                                        }  ?>">
                        <i class="si si-layers"></i><span class="sidebar-mini-hide">Hasil Foto</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->

<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-navicon"></i>
            </button>
            <!-- END Toggle Sidebar -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="content-header-section">
            <!-- User Dropdown -->
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user d-sm-none"></i>
                    <span class="d-none d-sm-inline-block"><?php echo $_SESSION['nama_lengkap'] ?></span>
                    <i class="fa fa-angle-down ml-5"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                    <a class="dropdown-item" href="be_pages_generic_profile.html">
                        <i class="si si-user mr-5"></i> Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">
                        <i class="si si-logout mr-5"></i> Sign Out
                    </a>
                </div>
            </div>
            <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header">
        <div class="content-header content-header-fullrow">
            <form action="be_pages_generic_search.html" method="post">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <!-- Close Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-times"></i>
                        </button>
                        <!-- END Close Search Section -->
                    </div>
                    <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-primary">
        <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
                <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->