<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananWithUserPaketAndPembayaran extends Model
{
    protected $table            = 'pesanan';
    protected $allowedFields    = ['id_pesanan, id_user, id_paket, id_pembayaran, nama_lengkap, tanggal, telp, alamat, catatan, extra_waktu_kerja, extra_premium_magazine, extra_background, extra_orang, email, nama_lengkap, no_telp, nama_paket, harga_paket, fotografer, videografer, asisten, waktu_kerja, jumlah_foto, jumlah_foto_edit, cetak_foto, videografi, penyimpanan, note, deskripsi_paket, order_id, jumlah_bayar, status, created_at, updated_at'];

    public function getPesananWithUserPaketAndPembayaran()
    {
        $db = db_connect();
        $builder = $db->table('pesanan');
        $builder->select('pesanan.id_pesanan, user.id_user, paket.id_paket, pembayaran.id_pembayaran, pesanan.nama_lengkap, pesanan.tanggal, pesanan.telp, pesanan.alamat, pesanan.catatan, pesanan.extra_waktu_kerja, pesanan.extra_premium_magazine, pesanan.extra_background, pesanan.extra_orang, user.email, user.nama_lengkap, user.no_telp, paket.nama_paket, paket.harga_paket, paket.fotografer, paket.videografer, paket.asisten, paket.waktu_kerja, paket.jumlah_foto, paket.jumlah_foto_edit, paket.cetak_foto, paket.videografi, paket.penyimpanan, paket.note, paket.deskripsi_paket, pembayaran.order_id, pembayaran.jumlah_bayar, pembayaran.status, pesanan.created_at, pesanan.updated_at');
        $builder->join('user', 'user.id_user = pesanan.id_user');
        $builder->join('paket', 'paket.id_paket = pesanan.id_paket');
        $builder->join('pembayaran', 'pembayaran.id_pesanan = pesanan.id_pesanan');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getPesananWithUserPaketAndPembayaranByIdUser(int $id_user)
    {
        $db = db_connect();
        $builder = $db->table('pesanan');
        $builder->select('pesanan.id_pesanan, user.id_user, paket.id_paket, pembayaran.id_pembayaran, pesanan.nama_lengkap, pesanan.tanggal, pesanan.telp, pesanan.alamat, pesanan.catatan, pesanan.extra_waktu_kerja, pesanan.extra_premium_magazine, pesanan.extra_background, pesanan.extra_orang, user.email, user.nama_lengkap, user.no_telp, paket.nama_paket, paket.harga_paket, paket.fotografer, paket.videografer, paket.asisten, paket.waktu_kerja, paket.jumlah_foto, paket.jumlah_foto_edit, paket.cetak_foto, paket.videografi, paket.penyimpanan, paket.note, paket.deskripsi_paket, pembayaran.order_id, pembayaran.jumlah_bayar, pembayaran.status, pesanan.created_at, pesanan.updated_at');
        $builder->join('user', 'user.id_user = pesanan.id_user');
        $builder->join('paket', 'paket.id_paket = pesanan.id_paket');
        $builder->join('pembayaran', 'pembayaran.id_pesanan = pesanan.id_pesanan');
        $builder->where('pesanan.id_user', $id_user);
        $query = $builder->get();
        return $query->getResult();
    }

    public function getPendingPesanan()
    {
        $db = db_connect();
        $builder = $db->table('pesanan');
        $builder->select('pesanan.id_pesanan, user.id_user, paket.id_paket, pembayaran.id_pembayaran, pesanan.nama_lengkap, pesanan.tanggal, pesanan.telp, pesanan.alamat, pesanan.catatan, pesanan.extra_waktu_kerja, pesanan.extra_premium_magazine, pesanan.extra_background, pesanan.extra_orang, user.email, user.nama_lengkap, user.no_telp, paket.nama_paket, paket.harga_paket, paket.fotografer, paket.videografer, paket.asisten, paket.waktu_kerja, paket.jumlah_foto, paket.jumlah_foto_edit, paket.cetak_foto, paket.videografi, paket.penyimpanan, paket.note, paket.deskripsi_paket, pembayaran.order_id, pembayaran.jumlah_bayar, pembayaran.status, pesanan.created_at, pesanan.updated_at');
        $builder->join('user', 'user.id_user = pesanan.id_user');
        $builder->join('paket', 'paket.id_paket = pesanan.id_paket');
        $builder->join('pembayaran', 'pembayaran.id_pesanan = pesanan.id_pesanan');
        $builder->where('pembayaran.status', 'pending');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getPesananWithUserPaketAndPembayaranById(int $id_pesanan)
    {
        $db = db_connect();
        $builder = $db->table('pesanan');
        $builder->select('pesanan.id_pesanan, user.id_user, paket.id_paket, pembayaran.id_pembayaran, pesanan.nama_lengkap, pesanan.tanggal, pesanan.telp, pesanan.alamat, pesanan.catatan, pesanan.extra_waktu_kerja, pesanan.extra_premium_magazine, pesanan.extra_background, user.email, user.nama_lengkap, user.no_telp, paket.nama_paket, paket.harga_paket, paket.fotografer, paket.videografer, paket.asisten, paket.waktu_kerja, paket.jumlah_foto, paket.jumlah_foto_edit, paket.cetak_foto, paket.videografi, paket.penyimpanan, paket.note, paket.deskripsi_paket, pembayaran.order_id, pembayaran.jumlah_bayar, pembayaran.status, pesanan.created_at, pesanan.updated_at');
        $builder->join('user', 'user.id_user = pesanan.id_user');
        $builder->join('paket', 'paket.id_paket = pesanan.id_paket');
        $builder->join('pembayaran', 'pembayaran.id_pesanan = pesanan.id_pesanan');
        $builder->where('pesanan.id_pesanan', $id_pesanan);
        $query = $builder->get();
        return $query->getResult();
    }

    public function getSumJumlahPembayaranWithDoneOrder()
    {
        $db = db_connect();
        $builder = $db->table('pesanan')->selectSum('jumlah_bayar');
        $builder->where('pesanan.status = ', 'done');
        $query = $builder->get();
        return $query->getResult();
    }
}
