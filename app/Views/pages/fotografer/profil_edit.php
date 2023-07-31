<?= $this->extend('pages/user/template/page_layout.php') ?>

<?= $this->section('content') ?>

<?php $session = session(); ?>

<?= $this->include('pages/user/template/navbar.php') ?>

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <h2 class="mb-0">Edit Profil</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section class="contact">
        <div class="container" data-aos="fade-up">
            <form action="/fotografer/profil/edit" method="post" enctype="multipart/form-data">
                <div class="row gy-4 justify-content-center">
                    <div class="col-md-4">
                        <label for="nama" class="form-label">Nama Lengkap*</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $user->nama_lengkap ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="telp" class="form-label">Nomor Telpon*</label>
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="nomor telpon" value="<?= $user->no_telp ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="telp" class="form-label">Foto Profil</label>
                        <input type="file" class="form-control" id="foto" name="foto" name="userfile" />
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <button class="btn btn-warning btn-submit w-100" id="btnCancel">
                                    Kembali
                                </button>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-primary btn-submit w-100" type="submit">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Contact Section -->
</main>
<!-- End #main -->
<?= $this->include('pages/user/template/footer.php') ?>

<script type="text/javascript">
    jQuery(document).ready(function() {
        $('#btnCancel').click(function() {
            window.location.href = '<?= base_url('/profil') ?>';
        });
    });
</script>
<?= $this->endSection() ?>