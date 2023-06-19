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
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Form Pembayaran</h1>
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
                            <h3 class="block-title">Update Pembayaran</h3>
                        </div>
                        <div class="block-content">
                            <form action="/admin/pembayaran/<?= $pembayaran->id_pembayaran ?>/edit" method="post">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating d-none">
                                            <input type="text" id="input-id" class="form-control d-none" name="id" value="<?= $pembayaran->id_pembayaran ?>">
                                            <input type="text" id="input-id" class="form-control" name="id_show" value="<?= $pembayaran->id_pembayaran ?>" disabled>
                                            <label for="input-id">ID</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material">
                                            <select class="form-control" id="input-id-pesanan" name="id_pesanan">
                                                <?php foreach ($pesanans as $key => $pesanan) : ?>
                                                    <option value="<?= $pesanan->id_pesanan ?>" <?php if ($pembayaran->id_pesanan == $pesanan->id_pesanan) {
                                                                                                    echo 'selected';
                                                                                                } ?>>
                                                        <?= $pesanan->id_pesanan ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <label for="input-id-pesanan">ID Pesanan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" id="input-type-pembayaran" name="type_pembayaran" class="form-control" value="<?= $pembayaran->type_pembayaran ?>" required>
                                            <label for="input-type-pembayaran">Type Pembayaran</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="number" id="input-jumlah-bayar" name="jumlah_bayar" class="form-control" value="<?= $pembayaran->jumlah_bayar ?>" required>
                                            <label for="input-jumlah-bayar">Jumlah Bayar</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" id="input-bukti" name="bukti" class="form-control" value="<?= $pembayaran->bukti ?>" required>
                                            <label for="input-bukti">Bukti Pembayaran</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material">
                                            <select class="form-control" id="input-status" name="status">
                                                <option value="belum dibayar" <?php if ($pembayaran->status == 'belum dibayar') {
                                                                                    echo 'selected';
                                                                                } ?>>Belum Dibayar</option>
                                                <option value="sudah upload bukti" <?php if ($pembayaran->status == 'sudah upload bukti') {
                                                                                        echo 'selected';
                                                                                    } ?>>Sudah Upload Bukti</option>
                                                <option value="done" <?php if ($pembayaran->status == 'done') {
                                                                            echo 'selected';
                                                                        } ?>>Done</option>
                                            </select>
                                            <label for="input-status">Status</label>
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