<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_jenis'];
    public $timestamp = true;

    //relasi ke tabel produk
    public function produk ()
    {
        return $this->hasMany(Produk::class);
    }
}
