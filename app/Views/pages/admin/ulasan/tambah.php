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
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Form Ulasan</h1>
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
                            <h3 class="block-title">Tambah Ulasan</h3>
                        </div>
                        <div class="block-content">
                            <form action="/admin/ulasan/new" method="post">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" id="input-id" name="id" class="form-control" disabled required>
                                            <label for="input-id">ID Auto</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material">
                                            <select class="form-control" id="input-id-user" name="id_user">
                                                <?php foreach ($users as $key => $user) : ?>
                                                    <option value="<?= $user->id_user ?>"><?= $user->id_user ?></option>
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
                                                    <option value="<?= $paket->id_paket ?>"><?= $paket->id_paket ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <label for="input-id-paket">ID Paket</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material">
                                            <input type="date" id="input-tanggal" name="tanggal" class="form-control" value="" required>
                                            <label for="input-tanggal">Tanggal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <textarea class="form-control" id="input-deskripsi" name="deskripsi" rows="4" required></textarea>
                                            <label for="input-deskripsi">Deskripsi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="number" id="input-bintang" name="bintang" class="form-control" value="" required>
                                            <label for="input-bintang">Bintang</label>
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