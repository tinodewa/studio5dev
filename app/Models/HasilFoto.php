<?php

namespace App\Models;

use App\Entities\HasilFoto as EntitiesHasilFoto;
use CodeIgniter\Model;

class HasilFoto extends Model
{
    protected $table            = 'hasil_foto';
    protected $returnType = EntitiesHasilFoto::class;
    protected $primaryKey       = 'id_hasil_foto';
    protected $allowedFields    = ['id_fotografer', 'id_pesanan', 'hasil_foto'];
    protected $useTimestamps = true;

    public function getHasilFotoByIdPesanan(string $id_pesanan)
    {
        $db = db_connect();
        $builder = $db->table('hasil_foto');
        $builder->where('id_pesanan', $id_pesanan);
        $query = $builder->get();
        return $query->getResult();
    }
}
