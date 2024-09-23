<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Menampikan halaman
    public function index() {
        return view('index', ['nama' => 'mfajaradam']);
    }
}
