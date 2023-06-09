<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Paket extends Entity
{
    protected $attributes = [
        'nama_paket' => null,
        'warna_nama_paket' => null,
        'gambar_paket' => null,
        'harga_paket' => null,
        'keterangan_harga_paket' => null,
        'status_paket' => null,
        'fotografer' => null,
        'videografer' => null,
        'waktu' => null,
        'dua_tempat' => null,
        'tempat_indoor' => null,
        'tempat_outdoor' => null,
        'hasil_jumlah' => null,
        'hasil_ukuran_cetak' => null,
        'hasil_editing' => null,
        'hasil_cinematic' => null,
        'kapasitas' => null,
        'deskripsi_paket' => null,
    ];

    public function setNamaPaket(string $namaPaket): self
    {
        $this->attributes['nama_paket'] = $namaPaket;
        return $this;
    }
    public function setWarnaNamaPaket(string $warnaNamaPaket): self
    {
        $this->attributes['warna_nama_paket'] = $warnaNamaPaket;
        return $this;
    }
    public function setGambarPaket(string $gambarPaket): self
    {
        $this->attributes['gambar_paket'] = $gambarPaket;
        return $this;
    }
    public function setHargaPaket(string $hargaPaket): self
    {
        $this->attributes['harga_paket'] = $hargaPaket;
        return $this;
    }
    public function setKeteranganHargaPaket(string $keteranganHargaPaket): self
    {
        $this->attributes['keterangan_harga_paket'] = $keteranganHargaPaket;
        return $this;
    }
    public function setStatusPaket(string $statusPaket): self
    {
        $this->attributes['status_paket'] = $statusPaket;
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
    public function setWaktu(string $waktu): self
    {
        $this->attributes['waktu'] = $waktu;
        return $this;
    }
    public function setDuaTempat(string $duaTempat): self
    {
        $this->attributes['dua_tempat'] = $duaTempat;
        return $this;
    }
    public function setTempatIndoor(string $tempatIndoor): self
    {
        $this->attributes['tempat_indoor'] = $tempatIndoor;
        return $this;
    }
    public function setTempatOutdoor(string $tempatOutdoor): self
    {
        $this->attributes['tempat_outdoor'] = $tempatOutdoor;
        return $this;
    }
    public function setHasilJumlah(string $hasilJumlah): self
    {
        $this->attributes['hasil_jumlah'] = $hasilJumlah;
        return $this;
    }
    public function setHasilUkuranCetak(string $hasilUkuranCetak): self
    {
        $this->attributes['hasil_ukuran_cetak'] = $hasilUkuranCetak;
        return $this;
    }
    public function setHasilEditing(string $hasilEditing): self
    {
        $this->attributes['hasil_editing'] = $hasilEditing;
        return $this;
    }
    public function setHasilCinematic(string $hasilCinematic): self
    {
        $this->attributes['hasil_cinematic'] = $hasilCinematic;
        return $this;
    }
    public function setKapasitas(string $kapasitas): self
    {
        $this->attributes['kapasitas'] = $kapasitas;
        return $this;
    }
    public function setDeskripsiPaket(string $deskripsiPaket): self
    {
        $this->attributes['deskripsi_paket'] = $deskripsiPaket;
        return $this;
    }
}
