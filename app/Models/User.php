<?php

namespace App\Models;

use App\Entities\User as EntitiesUser;
use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'user';
    protected $returnType = EntitiesUser::class;
    protected $primaryKey       = 'id_user';
    protected $allowedFields    = ['email', 'nama_lengkap', 'no_telp', 'password', 'role', 'foto_profil'];
    protected $useTimestamps = true;

    protected $validationRules = [
        'email' => 'required',
        'nama_lengkap' => 'required',
        'no_telp' => 'required',
        'password' => 'required',
        'role' => 'required',
    ];
}
