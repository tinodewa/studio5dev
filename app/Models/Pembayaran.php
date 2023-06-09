<?php

namespace App\Models;

use App\Entities\Pembayaran as EntitiesPembayaran;
use CodeIgniter\Model;

class Pembayaran extends Model
{
    protected $table            = 'pembayaran';
    protected $returnType = EntitiesPembayaran::class;
    protected $primaryKey       = 'id_pembayaran';
    protected $allowedFields    = ['id_pesanan', 'type_pembayaran', 'jumlah_bayar', 'status', 'bukti'];
    protected $useTimestamps = true;
}
