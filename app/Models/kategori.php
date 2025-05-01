<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris'; // Nama tabel di database
    protected $primaryKey = 'id_kategori'; // Primary key tabel
    public $timestamps = true; 

    protected $fillable = [
        'id_kategori',
        'nama_kategori',
    ];
   
    public function artikels()
    {
        return $this->hasMany(Artikel::class, 'id_kategori', 'id_kategori');
    }
}
