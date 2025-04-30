<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable = ['id_kategori','nama_kategori'];
    public $timestamp = true;
}
