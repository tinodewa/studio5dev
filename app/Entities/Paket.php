<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Paket extends Entity
{
    protected $attributes = [
        'id_paket' => null,
        'nama_paket' => null,
        'harga_paket' => null,
        'fotografer' => null,
        'videografer' => null,
        'asisten' => null,
        'waktu_kerja' => null,
        'jumlah_foto' => null,
        'jumlah_foto_edit' => null,
        'cetak_foto' => null,
        'videografi' => null,
        'penyimpanan' => null,
        'note' => null,
        'deskripsi_paket' => null,
    ];

    public function setid_paket(string $id_paket): self
    {
        $this->attributes['id_paket'] = $id_paket;
        return $this;
    }
    public function setNamaPaket(string $nama_paket): self
    {
        $this->attributes['nama_paket'] = $nama_paket;
        return $this;
    }
    public function setHargaPaket(string $harga_paket): self
    {
        $this->attributes['harga_paket'] = $harga_paket;
        return $this;
    }
    public function setFotografer(string $fotografer): self
    {
        $this->attributes['fotografer'] = $fotografer;
        return $this;
    }
    public function setVideografer(string $videografer): self
    {
        $this->attributes['videografer'] = $videografer;
        return $this;
    }
    public function setasisten(string $asisten): self
    {
        $this->attributes['asisten'] = $asisten;
        return $this;
    }
    public function setwaktu_kerja(string $waktu_kerja): self
    {
        $this->attributes['waktu_kerja'] = $waktu_kerja;
        return $this;
    }
    public function setjumlah_foto(string $jumlah_foto): self
    {
        $this->attributes['jumlah_foto'] = $jumlah_foto;
        return $this;
    }
    public function setjumlah_foto_edit(string $jumlah_foto_edit): self
    {
        $this->attributes['jumlah_foto_edit'] = $jumlah_foto_edit;
        return $this;
    }
    public function setcetak_foto(string $cetak_foto): self
    {
        $this->attributes['cetak_foto'] = $cetak_foto;
        return $this;
    }
    public function setvideografi(string $videografi): self
    {
        $this->attributes['videografi'] = $videografi;
        return $this;
    }
    public function setpenyimpanan(string $penyimpanan): self
    {
        $this->attributes['penyimpanan'] = $penyimpanan;
        return $this;
    }
    public function setnote(string $note): self
    {
        $this->attributes['note'] = $note;
        return $this;
    }
    public function setDeskripsiPaket(string $deskripsiPaket): self
    {
        $this->attributes['deskripsi_paket'] = $deskripsiPaket;
        return $this;
    }
}
