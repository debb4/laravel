<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halocontroller extends Controller
{
    public function hello()
    {
        // echo "Selamat Datang Debby Anggora";
        return view('halo'); //
    }
}
