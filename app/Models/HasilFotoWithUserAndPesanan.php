<?php

namespace App\Models;

use CodeIgniter\Model;

class HasilFotoWithUserAndPesanan extends Model
{
    protected $table            = 'hasil_foto';
    protected $allowedFields    = ['id_hasil_foto, hasil_foto, email, nama_lengkap, no_telp, nama_lengkap, tanggal_foto, jam, alamat, note, created_at, updated_at'];

    public function getHasilFotoWithUserAndPesanan()
    {
        $db = db_connect();
        $builder = $db->table('hasil_foto');
        $builder->select('hasil_foto.id_hasil_foto, hasil_foto.hasil_foto, user.email, user.nama_lengkap, user.no_telp, pesanan.nama_lengkap, pesanan.tanggal_foto, pesanan.jam, pesanan.alamat, pesanan.note, hasil_foto.created_at, hasil_foto.updated_at');
        $builder->join('user', 'user.id_user = hasil_foto.id_fotografer');
        $builder->join('pesanan', 'pesanan.id_pesan = hasil_foto.id_pesan');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getHasilFotoWithUserAndPesananById(int $id)
    {
        $db = db_connect();
        $builder = $db->table('hasil_foto');
        $builder->select('hasil_foto.id_hasil_foto, hasil_foto.hasil_foto, user.email, user.nama_lengkap, user.no_telp, pesanan.nama_lengkap, pesanan.tanggal_foto, pesanan.jam, pesanan.alamat, pesanan.note, hasil_foto.created_at, hasil_foto.updated_at');
        $builder->join('user', 'user.id_user = hasil_foto.id_fotografer');
        $builder->join('pesanan', 'pesanan.id_pesan = hasil_foto.id_pesan');
        $builder->where('hasil_foto.id_hasil_foto', $id);
        $query = $builder->get();
        return $query->getResult();
    }
}
