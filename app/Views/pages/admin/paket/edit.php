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
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Form Paket</h1>
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
                            <h3 class="block-title">Update Paket</h3>
                        </div>
                        <div class="block-content">
                            <form action="/admin/paket/<?= $paket->id_paket ?>/edit" method="post">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating d-none">
                                            <input type="text" id="input-id" class="form-control" name="id" value="<?= $paket->id_paket ?>">
                                            <input type="text" id="input-id-show" class="form-control" name="id_show" value="<?= $paket->id_paket ?>" disabled>
                                            <label for="input-id">ID</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" id="input-nama-paket" name="nama_paket" class="form-control" value="<?= $paket->nama_paket ?>" required>
                                            <label for="input-nama-paket">Nama Paket</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="number" id="input-jumlah-fotografer" name="jumlah_fotografer" class="form-control" value="<?= $paket->fotografer ?>" required>
                                            <label for="input-jumlah-fotografer">Jumlah Fotografer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="number" id="input-jumlah-videografer" name="jumlah_videografer" class="form-control" value="<?= $paket->videografer ?>" required>
                                            <label for="input-jumlah-videografer">Jumlah Videografer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="number" id="input-waktu-liputan" name="waktu_liputan" class="form-control" value="<?= $paket->waktu ?>" required>
                                            <label for="input-waktu-liputan">Waktu Liputan (Dalam Jam)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="number" id="input-jumlah-indoor" name="jumlah_indoor" class="form-control" value="<?= $paket->tempat_indoor ?>" required>
                                            <label for="input-jumlah-indoor">Jumlah Tempat Indoor</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="number" id="input-jumlah-outdoor" name="jumlah_outdoor" class="form-control" value="<?= $paket->tempat_outdoor ?>" required>
                                            <label for="input-jumlah-outdoor">Jumlah Tempat Outdoor</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="number" id="input-hasil-jumlah" name="hasil_jumlah" class="form-control" value="<?= $paket->hasil_jumlah ?>" required>
                                            <label for="input-hasil-jumlah">Jumlah Hasil Foto Yang Dicetak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="number" id="input-hasil-editing" name="hasil_editing" class="form-control" value="<?= $paket->hasil_editing ?>" required>
                                            <label for="input-hasil-editing">Jumlah Hasil Foto Yang Diedit</label>
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