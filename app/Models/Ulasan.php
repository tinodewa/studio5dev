<?php

namespace App\Models;

use App\Entities\Ulasan as EntitiesUlasan;
use CodeIgniter\Model;

class Ulasan extends Model
{
    protected $table            = 'ulasan';
    protected $returnType = EntitiesUlasan::class;
    protected $primaryKey       = 'id_ulasan';
    protected $allowedFields    = ['id_user', 'id_paket', 'tanggal', 'deskripsi', 'bintang'];
    protected $useTimestamps = true;

    protected $validationRules = [
        'id_user' => 'required',
        'id_paket' => 'required',
        'tanggal' => 'required',
        'deskripsi' => 'required',
        'bintang' => 'required'
    ];
}
