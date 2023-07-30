<?php

namespace App\Models;

use App\Entities\Paket as EntitiesPaket;
use CodeIgniter\Model;

class Paket extends Model
{
    protected $table            = 'paket';
    protected $returnType = EntitiesPaket::class;
    protected $primaryKey       = 'id_paket';
    protected $useTimestamps = true;
    protected $allowedFields    = [
        'id_paket',
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

    public function getPaketWithUlasan(string $id_paket_awal, string $id_paket_akhir)
    {
        $db = db_connect();

        $builder = $db->table('paket')
            ->select('paket.*, COALESCE((SELECT AVG(ulasan.bintang) FROM `ulasan` WHERE `ulasan`.`id_paket` = paket.id_paket), 0) AS rating_paket')
            ->where('paket.id_paket >= ', $id_paket_awal)
            ->where('paket.id_paket <= ', $id_paket_akhir)
            ->groupBy('paket.id_paket')
            ->get();
        $result = $builder->getResult();

        return $result;
    }

    public function getNewPaketWithUlasan()
    {
        $db = db_connect();

        $builder = $db->table('paket')
            ->select('paket.*, COALESCE((SELECT AVG(ulasan.bintang) FROM `ulasan` WHERE `ulasan`.`id_paket` = paket.id_paket), 0) AS rating_paket')
            ->where('paket.id_paket > ', 28)
            ->groupBy('paket.id_paket')
            ->get();
        $result = $builder->getResult();

        return $result;
    }
}
