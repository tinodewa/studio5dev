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
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Form Pesanan</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Material Design -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Floating Labels -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Update Pesanan</h3>
                        </div>
                        <div class="block-content">
                            <form action="/admin/pesanan/<?= $pesanan->id_pesanan ?>/edit" method="post">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" id="input-id" name="id" class="form-control d-none" value="<?= $pesanan->id_pesanan ?>">
                                            <input type="text" id="input-id-show" name="id_show" class="form-control" value="<?= $pesanan->id_pesanan ?>" disabled>
                                            <label for="input-id-show">ID Auto</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material">
                                            <select class="form-control" id="input-id-user" name="id_user">
                                                <?php foreach ($users as $key => $user) : ?>
                                                    <option value="<?= $user->id_user ?>" <?php if ($pesanan->id_user == $user->id_user) {
                                                                                                echo 'selected';
                                                                                            } ?>>
                                                        <?= $user->id_user ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <label for="input-id-user">ID User</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material">
                                            <select class="form-control" id="input-id-paket" name="id_paket">
                                                <?php foreach ($pakets as $key => $paket) : ?>
                                                    <option value="<?= $paket->id_paket ?>" <?php if ($paket->id_paket == $pesanan->id_paket) {
                                                                                                echo 'selected';
                                                                                            } ?>>
                                                        <?= $paket->id_paket ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <label for="input-id-paket">ID Paket</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" id="input-nama-lengkap" name="nama_lengkap" class="form-control" value="<?= $pesanan->nama_lengkap ?>" required>
                                            <label for="input-nama-lengkap">Nama Lengkap</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="date" id="input-tanggal-mulai" name="tanggal_mulai" class="form-control" value="<?= $pesanan->tanggal_mulai ?>" required>
                                            <label for="input-tanggal_mulai">Tanggal Mulai</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="date" id="input-tanggal-selesai" name="tanggal_selesai" class="form-control" value="<?= $pesanan->tanggal_selesai ?>" required>
                                            <label for="input-tanggal-selesai">Tanggal Selesai</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="number" id="input-telpon" name="telp" class="form-control" value="<?= $pesanan->telp ?>" required>
                                            <label for="input-telepon">Telpon</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="text" id="input-alamat" name="alamat" class="form-control" value="<?= $pesanan->alamat ?>" required>
                                            <label for="input-alamat">Alamat</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="text" id="input-catatan" name="catatan" class="form-control" value="<?= $pesanan->catatan ?>" required>
                                            <label for="input-catatan">Catatan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-alt-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Floating Labels -->
                </div>
            </div>
            <!-- END Material Design -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <?= $this->include('pages/admin/template/footer.php') ?>
</div>
<!-- END Page Container -->

<?= $this->endSection() ?>