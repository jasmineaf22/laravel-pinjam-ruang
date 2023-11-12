<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Authenticatable
{
    use HasFactory;
    public $incrementing = false;
    public $timestamps = false;


    protected $fillable = ['nim', 'name', 'email', 'password', 'no_hp', 'id_jurusan'];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'nim');
    }
}
