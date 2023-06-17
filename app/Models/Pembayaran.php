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

    public function getSumJumlahBayarWithStatusDone()
    {
        $db = db_connect();
        $builder = $db->table('pembayaran');
        $query = $builder->selectSum('jumlah_bayar')->where('status', 'done')->get();
        $result = $query->getRow();
        return $result->jumlah_bayar;
    }
}
