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
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Form User</h1>
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
                            <h3 class="block-title">Update User</h3>
                        </div>
                        <div class="block-content">
                            <form action="/admin/user/<?= $user->id_user ?>/edit" method="post">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" id="input-id" class="form-control d-none" name="id" value="<?= $user->id_user ?>">
                                            <input type="text" id="input-id" class="form-control" name="id_show" value="<?= $user->id_user ?>" disabled>
                                            <label for="input-id">ID</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" id="input-nama-lengkap" class="form-control" name="nama-lengkap" value="<?= $user->nama_lengkap ?>" required>
                                            <label for="input-nama-lengkap">Nama Lengkap</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="text" id="input-email" class="form-control" name="email" value="<?= $user->email ?>" required>
                                            <label for="input-email">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="text" id="input-telpon" class="form-control" name="telpon" value="<?= $user->no_telp ?>" required>
                                            <label for="input-telepon">Telpon</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material">
                                            <select class="form-control" id="input-role" name="role">
                                                <option value="user" <?php if ($user->role == "user") {
                                                                            echo 'selected';
                                                                        } ?>>User</option>
                                                <option value="admin" <?php if ($user->role == "admin") {
                                                                            echo 'selected';
                                                                        } ?>>Admin</option>
                                                <option value="fotografer" <?php if ($user->role == "fotografer") {
                                                                                echo 'selected';
                                                                            } ?>>Fotografer</option>
                                            </select>
                                            <label for="input-role">Role</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-9">
                                        <div class="form-material floating">
                                            <input type="password" id="input-password" name="password" class="form-control" value="" required>
                                            <label for="input-password">Password</label>
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