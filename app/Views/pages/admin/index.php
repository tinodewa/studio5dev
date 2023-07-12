<?= $this->extend('pages/admin/template/page_layout.php') ?>

<?= $this->section('content') ?>

<?php $session = session() ?>

<div id="page-container" class="sidebar-mini sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed">

    <?= $this->include('pages/admin/template/navbar.php') ?>

    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image bg-image-bottom" style="background-image: url('<?= base_url('assets/admin/media/photos/photo34@2x.jpg') ?>');">
            <div class="bg-primary-dark-op">
                <div class="content content-top text-center overflow-hidden">
                    <div class="pt-50 pb-20">
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Selamat datang!</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <div class="row invisible justify-content-center" data-toggle="appear">
                <!-- Row #1 -->
                <div class="col-6 col-xl-3">
                    <a class="block block-link-pop text-right bg-primary" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-bar-chart fa-3x text-primary-light"></i>
                            </div>
                            <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="<?= $pakets ?>">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Pesanan</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                    <a class="block block-link-pop text-right bg-earth" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-trophy fa-3x text-earth-light"></i>
                            </div>
                            <div class="font-size-h3 font-w600 text-white">Rp <span data-toggle="countTo" data-speed="1000" data-to="<?php if ($pembayarans != null) {
                                                                                                                                            echo $pembayarans[0]->jumlah_bayar;
                                                                                                                                        } ?>">0</span></div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Pendapatan</div>

                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                    <a class="block block-link-pop text-right bg-corporate" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                            <div class="float-left mt-10 d-none d-sm-block">
                                <i class="si si-fire fa-3x text-corporate-light"></i>
                            </div>
                            <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="<?= $users ?>">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-white-op">Pengguna</div>
                        </div>
                    </a>
                </div>
                <!-- END Row #1 -->
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <?= $this->include('pages/admin/template/footer.php') ?>
</div>
<!-- END Page Container -->

<?= $this->endSection() ?>