<?= $this->extend('pages/user/template/page_layout_profile.php') ?>

<?= $this->section('content') ?>

<?php $session = session(); ?>

<?= $this->include('pages/user/template/navbar.php') ?>

<div id="page-container" class="main-content-boxed profile-container">
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <!-- User Info -->
        <div class="bg-image bg-image-bottom" style="background-image: url('/assets/admin/media/photos/photo13@2x.jpg');">
            <div class="bg-primary-dark-op py-30">
                <div class="content content-full text-center">
                    <!-- Avatar -->
                    <div class="mb-15">
                        <div class="img-link">
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="/assets/admin/media/avatars/avatar15.jpg" alt="gambar user">
                        </div>
                    </div>
                    <!-- END Avatar -->

                    <!-- Personal -->
                    <h1 class="h3 text-white font-w700 mb-10">
                        <?= $user->nama_lengkap ?>
                    </h1>
                    <h2 class="h5 text-white-op">
                        <div class="text-primary-light"><?= $user->email ?></div>
                    </h2>
                    <h2 class="h5 text-white-op">
                        <?= $user->no_telp ?>
                    </h2>
                    <h2 class="h5 text-white-op">
                        Bergabung dengan kami sejak:<br>
                        <?php
                        // mendapatkan datetime dari database dengan format indonesia
                        $datetime = new \DateTime($user->created_at, new \DateTimeZone('Asia/Jakarta'));

                        //filter hanya menampilkan tanggal, bulan, tahun
                        $dataTimeIndonesia = $datetime->format('d-m-Y');

                        //print output
                        echo $dataTimeIndonesia;
                        ?>
                    </h2>
                    <!-- END Personal -->

                    <!-- Actions -->
                    <a class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5 px-20" href="#">
                        <i class="fa fa-pencil"></i> Edit
                    </a>
                    <!-- END Actions -->
                </div>
            </div>
        </div>
        <!-- END User Info -->
    </main>
</div>

<?= $this->include('pages/user/template/footer.php') ?>

<?= $this->endSection() ?>