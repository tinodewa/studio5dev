<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananWithUserAndPaket extends Model
{
    protected $table            = 'pesanan';
    protected $allowedFields    = ['id_pesanan, nama_lengkap, tanggal, telp, alamat, catatan, email, no_telp, nama_paket, warna_nama_paket, gambar_paket, harga_paket, keterangan_harga_paket, status_paket, fotografer, videografer, waktu, dua_tempat, tempat_indoor, tempat_outdoor, hasil_jumlah, hasil_ukuran_cetak, hasil_editing, hasil_cinematic, kapasitas, deskripsi_paket , created_at, updated_at'];

    public function getPesananWithUserAndPaket()
    {
        $db = db_connect();
        $builder = $db->table('pesanan');
        $builder->select('pesanan.id_pesanan, pesanan.nama_lengkap, pesanan.tanggal, pesanan.telp, pesanan.alamat, pesanan.catatan, user.email, user.no_telp, paket.nama_paket, paket.warna_nama_paket, paket.gambar_paket, paket.harga_paket, paket.keterangan_harga_paket, paket.status_paket, paket.fotografer, paket.videografer, paket.waktu, paket.dua_tempat, paket.tempat_indoor, paket.tempat_outdoor, paket.hasil_jumlah, paket.hasil_ukuran_cetak, paket.hasil_editing, paket.hasil_cinematic, paket.kapasitas, paket.deskripsi_paket, pesanan.created_at, pesanan.updated_at');
        $builder->join('user', 'user.id_user = pesanan.id_user');
        $builder->join('paket', 'paket.id_paket = pesanan.id_paket');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getPesananWithUserAndPaketById(int $id)
    {
        $db = db_connect();
        $builder = $db->table('pesanan');
        $builder->select('pesanan.id_pesanan, pesanan.nama_lengkap, pesanan.tanggal, pesanan.telp, pesanan.alamat, pesanan.catatan, user.email, user.no_telp, paket.nama_paket, paket.warna_nama_paket, paket.gambar_paket, paket.harga_paket, paket.keterangan_harga_paket, paket.status_paket, paket.fotografer, paket.videografer, paket.waktu, paket.dua_tempat, paket.tempat_indoor, paket.tempat_outdoor, paket.hasil_jumlah, paket.hasil_ukuran_cetak, paket.hasil_editing, paket.hasil_cinematic, paket.kapasitas, paket.deskripsi_paket, pesanan.created_at, pesanan.updated_at');
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
        $builder->select('pesanan.id_pesanan, pesanan.nama_lengkap, pesanan.tanggal, pesanan.telp, pesanan.alamat, pesanan.catatan, user.email, user.no_telp, paket.nama_paket, paket.warna_nama_paket, paket.gambar_paket, paket.harga_paket, paket.keterangan_harga_paket, paket.status_paket, paket.fotografer, paket.videografer, paket.waktu, paket.dua_tempat, paket.tempat_indoor, paket.tempat_outdoor, paket.hasil_jumlah, paket.hasil_ukuran_cetak, paket.hasil_editing, paket.hasil_cinematic, paket.kapasitas, paket.deskripsi_paket, pesanan.created_at, pesanan.updated_at');
        $builder->join('user', 'user.id_user = pesanan.id_user');
        $builder->join('paket', 'paket.id_paket = pesanan.id_paket');
        $builder->where('pesanan.nama_lengkap', '');
        $builder->where('pesanan.id_user', $id_user);
        $query = $builder->get();
        return $query->getResult();
    }
}
