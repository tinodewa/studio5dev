<?php

namespace App\Models;

use App\Entities\Paket as EntitiesPaket;
use CodeIgniter\Model;

class Paket extends Model
{
    protected $table            = 'paket';
    protected $returnType = EntitiesPaket::class;
    protected $primaryKey       = 'id_paket';
    protected $allowedFields    = [
        'nama_paket',
        'harga_paket',
        'fotografer',
        'videografer',
        'asisten',
        'waktu_kerja',
        'jumlah_foto',
        'jumlah_foto_edit',
        'cetak_foto',
        'videografi',
        'penyimpanan',
        'note',
        'deskripsi_paket',
    ];
    protected $useTimestamps = true;
}
