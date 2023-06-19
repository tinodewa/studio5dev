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
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Data Paket</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Dynamic Table Full -->
            <div class="block">
                <div class="block-content block-content-full">
                    <div class="form-group row">
                        <div class="col-md-9">
                            <a href="/admin/paket/new" class="btn btn-alt-primary">Tambah</a>
                        </div>
                    </div>
                    <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Nama Paket</th>
                                <th class="d-sm-table-cell">Harga Paket</th>
                                <th class="text-center" style="width: 15%;">Kontrol</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pakets as $key => $paket) : ?>
                                <tr id="paket-row-<?= $key ?>">
                                    <td class="text-center"><?= $paket->id_paket ?></td>
                                    <td class="font-w600"><?= $paket->nama_paket ?></td>
                                    <td class="d-sm-table-cell"><?= $paket->harga_paket ?></td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-secondary" title="Detail" data-toggle="modal" data-target="#modal<?= $key ?>">
                                            <i class="fa fa-info"></i>
                                        </button>
                                        <a href="/admin/paket/<?= $paket->id_paket ?>/edit" class="btn btn-sm btn-secondary" title="Edit">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-secondary" title="Hapus" data-toggle="modal" data-target="#modal-confirmation-<?= $key ?>">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                    <div class="modal fade" id="modal<?= $key ?>" tabindex="-1" aria-labelledby="#modal<?= $key ?>Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Paket</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="block-content">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="id" class="form-control" value="<?= $paket->id_paket ?>" disabled>
                                                                    <label for="id">ID</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="nama_paket" class="form-control" value="<?= $paket->nama_paket ?>" disabled>
                                                                    <label for="nama_paket">Nama Paket</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="warna_nama_paket" class="form-control" value="<?= $paket->warna_nama_paket ?>" disabled>
                                                                    <label for="warna_nama_paket">Warna Nama Paket</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <textarea class="form-control" id="deskripsi_paket" name="deskripsi_paket" rows="8" placeholder="Please add a comment" disabled><?= $paket->deskripsi_paket ?></textarea>
                                                                    <label for="deskripsi_paket">Deskripsi Paket</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="harga_paket" class="form-control" value="<?= $paket->harga_paket ?>" disabled>
                                                                    <label for="harga_paket">Harga Paket</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="kapasitas" class="form-control" value="<?= $paket->kapasitas ?>" disabled>
                                                                    <label for="kapasitas">Jumlah Hasil Foto</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="number" id="fotografer" class="form-control" value="<?= $paket->fotografer ?>" disabled>
                                                                    <label for="fotografer">Jumlah Fotografer</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="number" id="videografer" class="form-control" value="<?= $paket->videografer ?>" disabled>
                                                                    <label for="videografer">Jumlah Videografer</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="waktu" class="form-control" value="<?= $paket->waktu ?> jam" disabled>
                                                                    <label for="waktu">Waktu Liputan</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="number" id="tempat_indoor" class="form-control" value="<?= $paket->tempat_indoor ?>" disabled>
                                                                    <label for="tempat_indoor">Jumlah Tempat Indoor</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="number" id="tempat_outdoor" class="form-control" value="<?= $paket->tempat_outdoor ?>" disabled>
                                                                    <label for="tempat_outdoor">Jumlah Tempat Outdoor</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="hasil_cetak" class="form-control" value="<?= $paket->hasil_ukuran_cetak ?> cm" disabled>
                                                                    <label for="hasil_cetak">Ukuran Foto Yang Dicetak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="number" id="hasil_editing" class="form-control" value="<?= $paket->hasil_editing ?>" disabled>
                                                                    <label for="hasil_editing">Jumlah Foto Yang Diedit</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="number" id="hasil_cinematic" class="form-control" value="<?= $paket->hasil_cinematic ?>" disabled>
                                                                    <label for="hasil_cinematic">Video Cinematic</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="modal-confirmation-<?= $key ?>" tabindex="-1" aria-labelledby="modal-<?= $key ?>Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content mr-auto ml-auto col-6">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modal-<?= $key ?>Label">Peringatan!</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Yakin hapus paket <?= $paket->nama_paket; ?>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-dark btn-sm" id="btn-remove-<?= $key ?>">Ya</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <script type="text/javascript">
                                    document.addEventListener('DOMContentLoaded', function() {
                                        $(document).ready(function() {
                                            $('#btn-remove-<?= $key ?>').click(function() {
                                                var row = document.getElementById('paket-row-<?= $key ?>');
                                                if (row) {
                                                    // perform AJAX request here
                                                    $.ajax({
                                                        url: '<?= site_url('/admin/paket/remove') ?>',
                                                        type: 'POST',
                                                        data: {
                                                            id_paket: <?= $paket->id_paket ?>,
                                                        },
                                                        success: function(response) {
                                                            console.log(response);
                                                            row.remove();
                                                            $('#modal-confirmation-<?= $key ?>').modal('hide');
                                                        },
                                                        error: function(response) {
                                                            console.log(response);
                                                            $('#modal-confirmation-<?= $key ?>').modal('hide');
                                                        }
                                                    });
                                                }
                                            });
                                        });
                                    });
                                </script>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table Full -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <?= $this->include('pages/admin/template/footer.php') ?>
</div>
<!-- END Page Container -->

<?= $this->endSection() ?>