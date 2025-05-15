<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class FrontController extends Controller
{
    public function index()
    {
        $artikels = Artikel :: all();
        return view('welcome', compact('artikels'));
    }
}
