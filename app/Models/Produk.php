<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
     protected $fillable = ['id','nama_produk','harga','deskripsi','foto','id_jenis'];
    public $timestamp = true;

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis');
    }
    public function deleteImage(){
        if ($this->foto && file_exists(public_path('storage/produk' . $this->foto))) {
            return unlink(public_path('storage/produk' . $this->foto));
        }
    }
}
