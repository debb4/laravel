<?php

namespace App\Http\Controllers;

use App\Models\usermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function register(Request $request)
    {
        $prosesregister = usermodel::create([
            'username' => $request['username'],
            'password' => bcrypt($request['password']),
            'email' => $request['email'],
            'role' => 'admin'
        ]);
        if ($prosesregister) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('home');
            echo "Register Gagal";
        }
    }
    public function login(Request $request)
    {
        $proseslogin = $request->only('username', 'password');
        if (Auth::attempt($proseslogin)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('home')->with('error', 'Login Gagal');
        }
        echo "Proses Login";
    }
}
