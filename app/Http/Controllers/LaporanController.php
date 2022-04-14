<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('tampil_data');
    }

    public function input()
    {
        return view('tambah_data');
    }

    public function ceklist()
    {
        return view('ceklist');
    }
}
