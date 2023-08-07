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
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Data Pesanan</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Dynamic Table Full -->
            <div class="block">
                <!-- <div class="form-group row">
                    </div> -->
                <div class="block-header block-header-default">
                    <div class="col-md-9">
                        <a href="/admin/pesanan/new" class="btn btn-alt-primary">Tambah</a>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>ID User</th>
                                <th>ID Paket</th>
                                <th class="d-none d-sm-table-cell">Nama Lengkap</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Tanggal</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Telpon</th>
                                <th class="d-none d-sm-table-cell">Alamat</th>
                                <th class="d-none d-sm-table-cell">Catatan</th>
                                <th class="text-center" style="width: 15%;">Kontrol</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pesanans as $key => $pesanan) : ?>
                                <tr id="pesanan-row-<?= $key ?>">
                                    <td class="text-center"><?= $pesanan->id_pesanan ?></td>
                                    <td><?= $pesanan->id_user ?></td>
                                    <td><?= $pesanan->id_paket ?></td>
                                    <td class="d-sm-table-cell"><?= $pesanan->nama_lengkap ?></td>
                                    <td class="d-sm-table-cell"><?= $pesanan->tanggal_mulai ?></td>
                                    <td class="d-sm-table-cell"><?= $pesanan->telp ?></td>
                                    <td class="d-sm-table-cell"><?= $pesanan->alamat ?></td>
                                    <td class="d-sm-table-cell"><?= $pesanan->catatan ?></td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-secondary" title="Detail" data-toggle="modal" data-target="#modal<?= $key ?>">
                                            <i class="fa fa-info"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary" title="Hapus" data-toggle="modal" data-target="#modal-confirmation-<?= $key ?>">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                    <div class="modal fade" id="modal<?= $key ?>" tabindex="-1" aria-labelledby="#modal<?= $key ?>Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Pesanan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="block-content">
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="id" class="form-control" value="<?= $pesanan->id_pesanan ?>" disabled>
                                                                    <label for="id">ID</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="id_user" class="form-control" value="<?= $pesanan->id_user ?>" disabled>
                                                                    <label for="id_user">ID User</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="id_paket" class="form-control" value="<?= $pesanan->id_paket ?>" disabled>
                                                                    <label for="id_paket">ID Paket</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="nama_lengkap" class="form-control" value="<?= $pesanan->nama_lengkap ?>" disabled>
                                                                    <label for="nama_lengkap">Nama Lengkap</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="tanggal_mulai" class="form-control" value="<?= $pesanan->tanggal_mulai ?>" disabled>
                                                                    <label for="tanggal_mulai">Tanggal Mulai</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <div class="form-material floating">
                                                                <input type="text" id="tanggal_selesai" class="form-control" value="<?= $pesanan->tanggal_selesai ?>" disabled>
                                                                <label for="tanggal_selesai">Tanggal Selesai</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <div class="form-material floating">
                                                                <input type="text" id="telp" class="form-control" value="<?= $pesanan->telp ?>" disabled>
                                                                <label for="telp">Telpon</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <div class="form-material floating">
                                                                <input type="text" id="alamat" class="form-control" value="<?= $pesanan->alamat ?>" disabled>
                                                                <label for="alamat">Alamat</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <div class="form-material floating">
                                                                <input type="text" id="extra_waktu_kerja" class="form-control" value="<?= $pesanan->extra_waktu_kerja ?> jam" disabled>
                                                                <label for="extra_waktu_kerja">Extra Waktu Kerja</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if ($pesanan->extra_premium_magazine != 0) { ?>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="extra_premium_magazine" class="form-control" value=<?php if ($pesanan->extra_premium_magazine == 1) { ?> "Album Magnetic" <?php } else if ($pesanan->extra_premium_magazine == 2) { ?> "Premium Magazine" <?php } else if ($pesanan->extra_premium_magazine == 3) { ?> "Magazine Album" <?php }  ?> disabled>
                                                                    <label for="extra_premium_magazine">Extra Hasil Cetak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <?php if ($pesanan->extra_background != 0) { ?>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="extra_background" class="form-control" value="<?= $pesanan->extra_background ?> set" disabled>
                                                                    <label for="extra_background">Extra Background</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <?php if ($pesanan->extra_tempat != 0) { ?>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="extra_tempat" class="form-control" value="<?= $pesanan->extra_tempat ?> tempat" disabled>
                                                                    <label for="extra_tempat">Extra Tempat</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <?php if ($pesanan->extra_orang != 0) { ?>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="extra_orang" class="form-control" value="<?= $pesanan->extra_orang ?> orang" disabled>
                                                                    <label for="extra_orang">Extra Orang</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <?php if ($pesanan->extra_wisudawan != 0) { ?>
                                                        <div class="form-group row">
                                                            <div class="col-12">
                                                                <div class="form-material floating">
                                                                    <input type="text" id="extra_wisudawan" class="form-control" value="<?= $pesanan->extra_wisudawan ?> orang" disabled>
                                                                    <label for="extra_wisudawan">Extra Wisudawan</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <div class="form-material floating">
                                                                <input type="text" id="catatan" class="form-control" value="<?= $pesanan->catatan ?>" disabled>
                                                                <label for="catatan">Catatan</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <div class="form-material floating">
                                                                <input type="text" id="created_at" class="form-control" value="<?= $pesanan->created_at ?>" disabled>
                                                                <label for="created_at">Created At</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <div class="form-material floating">
                                                                <input type="text" id="updated_at" class="form-control" value="<?= $pesanan->updated_at ?>" disabled>
                                                                <label for="updated_at">Updated At</label>
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
                                Yakin hapus pesanan ini?
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
                                var row = document.getElementById('pesanan-row-<?= $key ?>');
                                if (row) {
                                    // perform AJAX request here
                                    $.ajax({
                                        url: '<?= site_url('/admin/pesanan/remove') ?>',
                                        type: 'POST',
                                        data: {
                                            id_pesanan: <?= $pesanan->id_pesanan ?>,
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