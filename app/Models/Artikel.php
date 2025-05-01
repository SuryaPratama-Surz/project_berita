<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikels'; 
    protected $primaryKey = 'id_artikel'; 
    public $timestamps = true; 

    protected $fillable = [
        'id_artikel',
        'judul',
        'isi',
        'kategori_id',
        'gambar'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

}
