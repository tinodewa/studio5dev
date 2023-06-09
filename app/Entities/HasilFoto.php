<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class HasilFoto extends Entity
{
    protected $attributes = [
        'id_hasil_foto' => null,
        'id_fotografer' => null,
        'id_pesanan' => null,
        'hasil_foto' => null,
    ];

    public function setIdHasilFoto(string $id_hasil_foto): self
    {
        $this->attributes['id_hasil_foto'] = $id_hasil_foto;
        return $this;
    }
    public function setIdFotografer(string $id_fotografer): self
    {
        $this->attributes['id_fotografer'] = $id_fotografer;
        return $this;
    }
    public function setIdPesan(string $id_pesanan): self
    {
        $this->attributes['id_pesanan'] = $id_pesanan;
        return $this;
    }
    public function setHasilFoto(string $Hasil_foto): self
    {
        $this->attributes['hasil_foto'] = $Hasil_foto;
        return $this;
    }
}
