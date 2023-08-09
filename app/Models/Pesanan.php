<?php

namespace App\Models;

use App\Entities\Pesanan as EntitiesPesanan;
use CodeIgniter\Model;

class Pesanan extends Model
{
    protected $table            = 'pesanan';
    protected $returnType = EntitiesPesanan::class;
    protected $primaryKey       = 'id_pesanan';
    protected $allowedFields    = ['id_user', 'id_paket', 'nama_lengkap', 'tanggal_mulai', 'tanggal_selesai', 'telp', 'alamat', 'catatan', 'extra_waktu_kerja', 'extra_premium_magazine', 'extra_background', 'extra_tempat', 'extra_orang', 'extra_wisudawan'];
    protected $useTimestamps = true;

    protected $validationRules = [
        'id_user' => 'required',
        'id_paket' => 'required',
        // 'nama_lengkap' => 'required',
        // 'lama_sewa' => 'required',
        // 'total_bayar' => 'required',
        // 'tanggal' => 'required',
        // 'telp' => 'required',
        // 'alamat'  => 'required',
        // 'bukti' => 'required',
        // 'catatan' => 'required'
    ];

    public function getCheckoutPesananByIduser(string $id_user)
    {
        $db = db_connect();
        $builder = $db->table('pesanan');
        $builder->where('pesanan.nama_lengkap', '');
        $builder->where('pesanan.id_user', $id_user);
        $query = $builder->get();
        return $query->getResult();
    }

    public function getCountTanggalPesanan()
    {
        $db = db_connect();

        // Your raw SQL query
        $sql = "SELECT DATE(tanggal_mulai) AS tanggal, COUNT(DATE(tanggal_mulai)) AS jumlah_tanggal FROM pesanan WHERE nama_lengkap != '' GROUP BY DATE(tanggal_mulai)";

        // Execute the query and get the result object
        $result = $db->query($sql);

        return $result->getResult();
    }
    public function getCountPesananByDateStartAndEnd(string $dateStart, string $dateEnd)
    {
        $db = db_connect();
        $builder = $db->table('pesanan');
        // $builder->selectCount('id_pesanan');
        $builder->where('tanggal >= ', $dateStart);
        $builder->where('tanggal <= ', $dateEnd);
        $builder->where('nama_lengkap != ', '');
        $query = $builder->get();
        return $query->getResult();
    }
}
