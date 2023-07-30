<?php

namespace App\Models;

use App\Entities\Pembayaran as EntitiesPembayaran;
use CodeIgniter\Model;

class Pembayaran extends Model
{
    protected $table            = 'pembayaran';
    protected $returnType = EntitiesPembayaran::class;
    protected $primaryKey       = 'id_pembayaran';
    protected $allowedFields    = ['id_pesanan', 'order_id', 'jumlah_bayar', 'status'];
    protected $useTimestamps = true;

    public function getSumJumlahBayarWithStatusDone()
    {
        $db = db_connect();

        $builder = $db->table('pembayaran')
            ->selectSum('jumlah_bayar')
            ->where('status LIKE ', '%proses%')
            ->orWhere('status LIKE ', '%done%')
            ->get();
        $result = $builder->getResult();

        return $result;
        // $query = $builder->selectSum('jumlah_bayar')->where('status', 'dalam proses')->->get();
        // $result = $query->getRow();
        // return $result->jumlah_bayar;
    }
}
