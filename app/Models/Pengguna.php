<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;

class Pengguna extends Model
{
    use HasFactory;

    protected $fillable = ['id','name', 'password', 'email'];

    public $timestamps = true;

    
}
