<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Pembayaran extends Entity
{
    protected $attributes = [
        'id_pesanan' => null,
        'order_id' => null,
        'jumlah_bayar' => null,
        'status' => null,
    ];

    public function setIdPesan(string $id_pesan): self
    {
        $this->attributes['id_pesan'] = $id_pesan;
        return $this;
    }
    public function setOrderID(string $order_id): self
    {
        $this->attributes['order_id'] = $order_id;
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
}
