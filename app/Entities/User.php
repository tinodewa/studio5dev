<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    protected $attributes = [
        'id_user' => null,
        'email' => null,
        'nama_lengkap' => null,
        'no_telp' => null,
        'password' => null,
        'role' => null,
        'foto_profil' => null
    ];

    public function setIdUser(string $id_user): self
    {
        $this->attributes['id_user'] = $id_user;
        return $this;
    }
    public function setEmail(string $email): self
    {
        $this->attributes['email'] = $email;
        return $this;
    }
    public function setNamaLengkap(string $nama_lengkap): self
    {
        $this->attributes['nama_lengkap'] = $nama_lengkap;
        return $this;
    }
    public function setNoTelp(string $no_telp): self
    {
        $this->attributes['no_telp'] = $no_telp;
        return $this;
    }
    public function setPassword(string $password): self
    {
        $this->attributes['password'] = $password;
        return $this;
    }
    public function setRole(string $role): self
    {
        $this->attributes['role'] = $role;
        return $this;
    }
    public function setFotoProfile(string $foto_profil): self
    {
        $this->attributes['foto_profil'] = $foto_profil;
        return $this;
    }
}
