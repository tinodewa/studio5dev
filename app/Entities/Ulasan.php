<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Ulasan extends Entity
{
    protected $attributes = [
        'id_user' => null,
        'id_paket' => null,
        'tanggal' => null,
        'deskripsi' => null,
        'bintang' => null,
    ];

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
    public function setTanggal(string $tanggal): self
    {
        $this->attributes['tanggal'] = $tanggal;
        return $this;
    }
    public function setDeskripsi(string $deskripsi): self
    {
        $this->attributes['deskripsi'] = $deskripsi;
        return $this;
    }
    public function setBintang(string $bintang): self
    {
        $this->attributes['bintang'] = $bintang;
        return $this;
    }
}
