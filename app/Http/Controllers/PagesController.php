<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('mahasiswa.index');
    }

    public function about() {
        $nama = 'hilman firdaus';
        return view('about', ['nama' => $nama]);
    }
}
