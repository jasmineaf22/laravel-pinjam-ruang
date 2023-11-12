<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['nama'];

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'id_jurusan');
    }
}
