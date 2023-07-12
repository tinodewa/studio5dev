<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Pesanan extends Entity
{
    protected $attributes = [
        'id' => null,
        'id_pesanan' => null,
        'id_user' => null,
        'id_paket' => null,
        'nama_lengkap' => null,
        'tanggal' => null,
        'telp' => null,
        'alamat'  => null,
        'catatan' => null,
        'extra_waktu_kerja' => null,
        'extra_premium_magazine' => null,
        'extra_background_dan_outfit' => null,
    ];


    public function setId(string $id): self
    {
        $this->attributes['id'] = $id;
        return $this;
    }
    public function setIdPesanan(string $id_pesanan): self
    {
        $this->attributes['id_pesanan'] = $id_pesanan;
        return $this;
    }
    public function setIdUser(string $id_user): self
    {
        $this->attributes['id_user'] = $id_user;
        return $this;
    }
    public function setIdPaket(string $id_paket): self
    {
        $this->attributes['id_paket'] = $id_paket;
        return $this;
    }
    public function setNamaLengkap(string $nama_lengkap): self
    {
        $this->attributes['nama_lengkap'] = $nama_lengkap;
        return $this;
    }
    public function setTanggal(string $tanggal): self
    {
        $this->attributes['tanggal'] = $tanggal;
        return $this;
    }
    public function setTelp(string $telp): self
    {
        $this->attributes['telp'] = $telp;
        return $this;
    }
    public function setAlamat(string $alamat): self
    {
        $this->attributes['alamat'] = $alamat;
        return $this;
    }
    public function setCatatan(string $catatan): self
    {
        $this->attributes['catatan'] = $catatan;
        return $this;
    }
    public function setextra_waktu_kerja(string $extra_waktu_kerja): self
    {
        $this->attributes['extra_waktu_kerja'] = $extra_waktu_kerja;
        return $this;
    }
    public function setextra_premium_magazine(string $extra_premium_magazine): self
    {
        $this->attributes['extra_premium_magazine'] = $extra_premium_magazine;
        return $this;
    }
    public function setextra_background_dan_outfit(string $extra_background_dan_outfit): self
    {
        $this->attributes['extra_background_dan_outfit'] = $extra_background_dan_outfit;
        return $this;
    }
}
