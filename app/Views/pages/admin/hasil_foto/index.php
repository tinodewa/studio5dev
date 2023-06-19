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
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Data Hasil Foto</h1>
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
                            <a href="/admin/hasil-foto/new" class="btn btn-alt-primary">Tambah</a>
                        </div>
                    </div>
                    <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>ID Fotografer</th>
                                <th>ID Pesanan</th>
                                <th class="d-none d-sm-table-cell">Hasil Foto</th>
                                <th class="text-center" style="width: 15%;">Kontrol</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($hasilFotos as $key => $hasilFoto) : ?>
                                <tr id="hasilfoto-row-<?= $key ?>">
                                    <td class="text-center"><?= $hasilFoto->id_hasil_foto ?></td>
                                    <td class="text-center"><?= $hasilFoto->id_fotografer ?></td>
                                    <td class="text-center"><?= $hasilFoto->id_pesanan ?></td>
                                    <td class="d-sm-table-cell"><?= $hasilFoto->hasil_foto ?></td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-secondary" title="Detail" data-toggle="modal" data-target="#modal<?= $key ?>">
                                            <i class="fa fa-info"></i>
                                        </button>
                                        <a href="/admin/hasil-foto/<?= $hasilFoto->id_hasil_foto ?>/edit" class="btn btn-sm btn-secondary" title="Edit">
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Hasil Foto</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="block-content">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="id" class="form-control" value="<?= $hasilFoto->id_hasil_foto ?>" disabled>
                                                                    <label for="id">ID</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="id_fotografer" class="form-control" value="<?= $hasilFoto->id_fotografer ?>" disabled>
                                                                    <label for="id_fotografer">ID Fotografer</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="id_pesanan" class="form-control" value="<?= $hasilFoto->id_pesanan ?>" disabled>
                                                                    <label for="id_pesanan">ID Pesanan</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="form-material floating">
                                                                    <textarea class="form-control" id="hasil_foto" name="hasil_foto" rows="8" placeholder="Please add a comment" disabled><?= $hasilFoto->hasil_foto ?></textarea>
                                                                    <label for="hasil_foto">Hasil Foto</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="role" class="form-control" value="<?= $hasilFoto->created_at ?>" disabled>
                                                                    <label for="role">Created At</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="role" class="form-control" value="<?= $hasilFoto->updated_at ?>" disabled>
                                                                    <label for="role">Updated At</label>
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
                                                    Yakin hapus hasil foto ini?
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
                                                var row = document.getElementById('hasilfoto-row-<?= $key ?>');
                                                if (row) {
                                                    // perform AJAX request here
                                                    $.ajax({
                                                        url: '<?= site_url('/admin/hasil-foto/remove') ?>',
                                                        type: 'POST',
                                                        data: {
                                                            id_hasil_foto: <?= $hasilFoto->id_hasil_foto ?>,
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