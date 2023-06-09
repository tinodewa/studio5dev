<?php

namespace App\Models;

use App\Entities\Paket as EntitiesPaket;
use CodeIgniter\Model;

class Paket extends Model
{
    protected $table            = 'paket';
    protected $returnType = EntitiesPaket::class;
    protected $primaryKey       = 'id_paket';
    protected $allowedFields    = [
        'nama_paket',
        'warna_nama_paket',
        'gambar_paket',
        'harga_paket',
        'keterangan_harga_paket',
        'status_paket',
        'fotografer',
        'videografer',
        'waktu',
        'dua_tempat',
        'tempat_indoor',
        'tempat_outdoor',
        'hasil_jumlah',
        'hasil_ukuran_cetak',
        'hasil_editing',
        'hasil_cinematic',
        'kapasitas',
        'deskripsi_paket',
    ];
    protected $useTimestamps = true;

    // protected $validationRules = [
    //     'nama_paket' => 'required',
    //     'warna_nama_paket' => 'required',
    //     'gambar_paket' => 'required',
    //     'harga_paket' => 'required',
    //     'keterangan_harga_paket' => 'required',
    //     'status_paket' => 'required',
    //     'fotografer' => 'required',
    //     'videografer' => 'required',
    //     'waktu' => 'required',
    //     'dua_tempat' => 'required',
    //     'tempat_indoor' => 'required',
    //     'tempat_outdoor' => 'required',
    //     'hasil_jumlah' => 'required',
    //     'hasil_ukuran_cetak' => 'required',
    //     'hasil_editing' => 'required',
    //     'hasil_cinematic' => 'required',
    //     'kapasitas' => 'required',
    //     'deskripsi_paket' => 'required',
    // ];
}
