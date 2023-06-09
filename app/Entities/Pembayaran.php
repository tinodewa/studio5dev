<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Pembayaran extends Entity
{
    protected $attributes = [
        'id_pesanan' => null,
        'type_pembayaran' => null,
        'jumlah_bayar' => null,
        'status' => null,
        'bukti' => null,
    ];

    public function setIdPesan(string $id_pesan): self
    {
        $this->attributes['id_pesan'] = $id_pesan;
        return $this;
    }
    public function setTypePembayaran(string $type_pembayaran): self
    {
        $this->attributes['type_pembayaran'] = $type_pembayaran;
        return $this;
    }
    public function setJumlahBayar(string $jumlah_bayar): self
    {
        $this->attributes['jumlah_bayar'] = $jumlah_bayar;
        return $this;
    }
    public function setStatus(string $status): self
    {
        $this->attributes['status'] = $status;
        return $this;
    }
    public function setBukti(string $bukti): self
    {
        $this->attributes['bukti'] = $bukti;
        return $this;
    }
}
