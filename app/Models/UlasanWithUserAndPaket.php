<?php

namespace App\Models;

use CodeIgniter\Model;

class UlasanWithUserAndPaket extends Model
{
    protected $table            = 'ulasan';
    protected $allowedFields    = ['id_ulasan, tanggal, deskripsi, email, nama_lengkap, no_telp, foto_profil, nama_paket, deskripsi_paket, harga_paket, gambar_paket, created_at, updated_at'];

    public function getUlasanWithUserAndPaket()
    {
        $db = db_connect();
        $builder = $db->table('ulasan');
        $builder->select('ulasan.id_ulasan, ulasan.tanggal, ulasan.deskripsi, ulasan.bintang, user.email, user.nama_lengkap, user.foto_profil, user.no_telp, paket.nama_paket, paket.deskripsi_paket, paket.harga_paket, paket.gambar_paket, ulasan.created_at, ulasan.updated_at');
        $builder->join('user', 'user.id_user = ulasan.id_user');
        $builder->join('paket', 'paket.id_paket = ulasan.id_paket');
        $builder->limit(5);
        $query = $builder->get();
        return $query->getResult();
    }

    public function getUlasanWithUserAndPaketById(int $id)
    {
        $db = db_connect();
        $builder = $db->table('ulasan');
        $builder->select('ulasan.id_ulasan, ulasan.tanggal, ulasan.deskripsi_paket, ulasan.bintang, user.email, user.nama_lengkap, user.foto_profil, user.no_telp, paket.nama_paket, paket.deskripsi, paket.harga_paket, paket.gambar_paket, ulasan.created_at, ulasan.updated_at');
        $builder->join('user', 'user.id_user = ulasan.id_user');
        $builder->join('paket', 'paket.id_paket = ulasan.id_paket');
        $builder->where('ulasan.id_ulasan', $id);
        $query = $builder->get();
        return $query->getResult();
    }
}
