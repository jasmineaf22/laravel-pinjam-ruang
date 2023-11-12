<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = ['nama', 'deskripsi'];

    public function ruangans()
    {
        return $this->hasMany(Ruangan::class, 'id_gedung');
    }
}
