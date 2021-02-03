<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
}
