<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function test1()
    {
        return view('test');
    }
    public function imam()
    {
        echo "Halo imam";
        // return view('test');
    }
}
