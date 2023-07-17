<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananWithUserAndPaket extends Model
{
    protected $table            = 'pesanan';
    protected $allowedFields    = ['id_pesanan, id_paket, nama_lengkap, tanggal, telp, alamat, catatan, extra_waktu_kerja, email, no_telp, nama_paket, harga_paket, fotografer, videografer, asisten, waktu_kerja, jumlah_foto, jumlah_foto_edit, cetak_foto, videografi, penyimpanan, note, deskripsi_paket, extra_premium_magazine, extra_background_dan_outfit, extra_orang, created_at, updated_at'];

    public function getPesananWithUserAndPaket()
    {
        $db = db_connect();
        $builder = $db->table('pesanan');
        $builder->select('pesanan.id_pesanan, paket.id_paket, pesanan.nama_lengkap, pesanan.tanggal, pesanan.telp, pesanan.alamat, pesanan.catatan, pesanan.extra_waktu_kerja, pesanan.extra_premium_magazine, pesanan.extra_background_dan_outfit, pesanan.extra_orang, user.email, user.no_telp, paket.nama_paket, paket.harga_paket, paket.fotografer, paket.videografer, paket.asisten, paket.waktu_kerja, paket.jumlah_foto, paket.jumlah_foto_edit, paket.cetak_foto, paket.videografi, paket.penyimpanan, paket.note, paket.deskripsi_paket, pesanan.created_at, pesanan.updated_at');
        $builder->join('user', 'user.id_user = pesanan.id_user');
        $builder->join('paket', 'paket.id_paket = pesanan.id_paket');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getPesananWithUserAndPaketById(int $id)
    {
        $db = db_connect();
        $builder = $db->table('pesanan');
        $builder->select('pesanan.id_pesanan, paket.id_paket, pesanan.nama_lengkap, pesanan.tanggal, pesanan.telp, pesanan.alamat, pesanan.catatan, pesanan.extra_waktu_kerja, pesanan.extra_premium_magazine, pesanan.extra_background_dan_outfit, pesanan.extra_orang, user.email, user.no_telp, paket.nama_paket, paket.harga_paket, paket.fotografer, paket.videografer, paket.asisten, paket.waktu_kerja, paket.jumlah_foto, paket.jumlah_foto_edit, paket.cetak_foto, paket.videografi, paket.penyimpanan, paket.note, paket.deskripsi_paket, pesanan.created_at, pesanan.updated_at');
        $builder->join('user', 'user.id_user = pesanan.id_user');
        $builder->join('paket', 'paket.id_paket = pesanan.id_paket');
        $builder->where('pesanan.id_pesanan', $id);
        $query = $builder->get();
        return $query->getResult();
    }

    public function getPesananWithUserAndPaketInCartByIduser(string $id_user)
    {
        $db = db_connect();
        $builder = $db->table('pesanan');
        $builder->select('pesanan.id_pesanan, paket.id_paket, pesanan.nama_lengkap, pesanan.tanggal, pesanan.telp, pesanan.alamat, pesanan.catatan, pesanan.extra_waktu_kerja, pesanan.extra_premium_magazine, pesanan.extra_background_dan_outfit, pesanan.extra_orang, user.email, user.no_telp, paket.nama_paket, paket.harga_paket, paket.fotografer, paket.videografer, paket.asisten, paket.waktu_kerja, paket.jumlah_foto, paket.jumlah_foto_edit, paket.cetak_foto, paket.videografi, paket.penyimpanan, paket.note, paket.deskripsi_paket, pesanan.created_at, pesanan.updated_at');
        $builder->join('user', 'user.id_user = pesanan.id_user');
        $builder->join('paket', 'paket.id_paket = pesanan.id_paket');
        $builder->where('pesanan.nama_lengkap', '');
        $builder->where('pesanan.id_user', $id_user);
        $query = $builder->get();
        return $query->getResult();
    }
}
