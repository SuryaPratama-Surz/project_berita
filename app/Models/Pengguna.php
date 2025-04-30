<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengguna extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','password','email','created_at','updated_at'];
    public $timestamp = true;
}
