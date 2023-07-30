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
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Form Tambah</h1>
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
                            <h3 class="block-title">Tambah Paket</h3>
                        </div>
                        <div class="block-content">
                            <form action="/admin/paket/new" method="post">
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <div class="form-material floating">
                                            <input type="text" id="input-id" name="id" class="form-control" disabled required>
                                            <label for="input-id">ID Auto</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="mb-0">General</h5>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-material">
                                                <input type="text" id="nama_paket" name="nama_paket" placeholder="Masukkan nama paket..." class="form-control" required>
                                                <label for="nama_paket">Nama Paket*</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material">
                                                <input type="text" id="harga_paket" name="harga_paket" placeholder="Masukkan harga paket..." class="form-control" required>
                                                <label for="harga_paket">Harga Paket*</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <select class="form-control" id="waktu_kerja" name="waktu_kerja" required>
                                                    <option></option><!-- Empty value for demostrating material select box -->
                                                    <option value="1 working hours">1 working hours</option>
                                                    <option value="2 working hours">2 working hours</option>
                                                    <option value="3 working hours">3 working hours</option>
                                                    <option value="4 working hours">4 working hours</option>
                                                    <option value="5 working hours">5 working hours</option>
                                                    <option value="6 working hours">6 working hours</option>
                                                    <option value="7 working hours">7 working hours</option>
                                                    <option value="8 working hours">8 working hours</option>
                                                </select>
                                                <label for="waktu_kerja">Waktu Kerja* (Dalam jam)</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-material">
                                                <textarea class="form-control" id="deskripsi_paket" name="deskripsi_paket" rows="8" placeholder="Masukkan deskripsi paket..." required></textarea>
                                                <label for="deskripsi_paket">Deskripsi Paket*</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="mb-0">Tenaga Kerja</h5>
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="form-material floating">
                                                <input type="number" id="fotografer" name="fotografer" class="form-control" value="0" aria-valuemin="0" oninput="this.value = Math.abs(this.value)">
                                                <label for="fotografer">Jumlah Fotografer</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-material floating">
                                                <input type="number" id="videografer" name="videografer" class="form-control" value="0" aria-valuemin="0" oninput="this.value = Math.abs(this.value)">
                                                <label for="videografer">Jumlah Videografer</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-material floating">
                                                <input type="number" id="asisten" name="asisten" class="form-control" value="0" aria-valuemin="0" oninput="this.value = Math.abs(this.value)">
                                                <label for="asisten">Jumlah Asisten</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5 class="mb-0">Hasil</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <select class="form-control" id="jumlah_foto" name="jumlah_foto">
                                                    <option></option><!-- Empty value for demostrating material select box -->
                                                    <option value="">Tidak ada</option>
                                                    <option value="20 photo">20 photo</option>
                                                    <option value="50 photo">50 photo</option>
                                                    <option value="75 photo">75 photo</option>
                                                    <option value="100 photo">100 photo</option>
                                                    <option value="150 photo">150 photo</option>
                                                    <option value="Unlimited photo">Unlimited photo</option>
                                                </select>
                                                <label for="jumlah_foto">Jumlah Hasil Foto</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <select class="form-control" id="jumlah_edit" name="jumlah_edit">
                                                    <option></option><!-- Empty value for demostrating material select box -->
                                                    <option value="">Tidak ada</option>
                                                    <option value="5 photo edited">5 photo edited</option>
                                                    <option value="10 photo edited">10 photo edited</option>
                                                    <option value="15 photo edited">15 photo edited</option>
                                                    <option value="20 photo edited">20 photo edited</option>
                                                    <option value="50 photo edited">50 photo edited</option>
                                                    <option value="100 photo edited">100 photo edited</option>
                                                    <option value="150 photo edited">150 photo edited</option>
                                                    <option value="All photo edited">All photo edited</option>
                                                    <option value="All photos edited tone">All photos edited tone</option>
                                                </select>
                                                <label for="jumlah_edit">Jumlah Hasil Edit Foto</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <select class="form-control" id="hasil_cetak" name="hasil_cetak">
                                                    <option></option><!-- Empty value for demostrating material select box -->
                                                    <option value="">Tidak ada</option>
                                                    <option value="Cetak 4R/orang">Cetak 4R/orang</option>
                                                    <option value="5 cetak 10RS">5 cetak 10RS</option>
                                                    <option value="2 cetak 10RS">2 cetak 10RS</option>
                                                    <option value="1x print 10RS + Frame">1x print 10RS + Frame</option>
                                                    <option value="Cetak 12RS + Frame">Cetak 12RS + Frame</option>
                                                    <option value="Cetak 16RS + Frame">Cetak 16RS + Frame</option>
                                                    <option value="Cetak 25 lembar (4R) & Cetak 1x 12RS + Frame">Cetak 25 lembar (4R) & Cetak 1x 12RS + Frame</option>
                                                    <option value="Magnetic Album + 100 photo (4R)">Magnetic Album + 100 photo (4R)</option>
                                                    <option value="Magnetic Album + 120 photo (4R)">Magnetic Album + 120 photo (4R)</option>
                                                    <option value="Premium Magazine & print 16RS + Frame">Premium Magazine & print 16RS + Frame</option>
                                                    <option value="Premium Magazine">Premium Magazine</option>
                                                </select>
                                                <label for="hasil_cetak">Hasil Cetak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-material floating">
                                                <select class="form-control" id="hasil_videografi" name="hasil_videografi">
                                                    <option></option><!-- Empty value for demostrating material select box -->
                                                    <option value="">Tidak ada</option>
                                                    <option value="1 minute cinematic video">1 minute cinematic video</option>
                                                    <option value="1 minute video teaser">1 minute video teaser</option>
                                                    <option value="1 minute video teaser & 3 minute video highlight">1 minute video teaser & 3 minute video highlight</option>
                                                    <option value="3 minute cinematic video, video drone">3 minute cinematic video, video drone</option>
                                                </select>
                                                <label for="hasil_videografi">Videografi</label>
                                            </div>
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