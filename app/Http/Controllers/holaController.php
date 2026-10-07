<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function index()
    {
        $nombre = 'Oscar';
        return view('hola', ['nombre' => $nombre]);
    }
}