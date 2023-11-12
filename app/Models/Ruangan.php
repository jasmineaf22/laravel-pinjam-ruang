<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['nama', 'kapasitas', 'fasilitas', 'deskripsi', 'id_gedung'];

    public function gedung()
    {
        return $this->belongsTo(Gedung::class, 'id_gedung');
    }

    public function peminjamans()
    {
        return $this->belongsToMany(Mahasiswa::class, 'peminjaman', 'id_ruangan', 'nim')
            ->withPivot('organisasi', 'acara', 'hari', 'jam', 'jumlah_peserta');
    }
}
