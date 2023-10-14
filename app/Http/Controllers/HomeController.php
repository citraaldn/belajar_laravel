<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }
public function datadiri(){
    return "Nama : Citra Aldona <br> NIM : D212011041 <br> Kelas : KA-6B"
}
}

