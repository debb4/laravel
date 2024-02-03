<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\usermodel;
use Database\Seeders\UsermodelSeeder;
use Illuminate\Http\Request;
use illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class dashboardcontroller extends Controller
{
    public function index()
    {
        //nanpilin nama pengguna setelah login
        // $id = Auth::id();
        // $user = User::find($id);

        // if ($user) {
        //     $username = $user->username;
        //     return view('dashboard.dashboard', ['username' => $username]);

        // nampilin data table
        $data_user = usermodel::all();
        return view('dashboard.dashboard', compact('data_user'));
    }
    public function create()
    {
        return view('dashboard.user_create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|email',
        ]);
        Usermodel::create([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'email' => $request->input('email'),
            'role' => 'admin',
        ]);
        return redirect()->route('dashboard')->with('success');
    }
    public function edit($id)
    {
        $user = usermodel::findorfail($id);
        // return $user;
        return view('dashboard.user_edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        // Temukan user berdasarkan ID
        $user = usermodel::find($id);

        // Update data user
        $user->update([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('dashboard')->with('success', 'User berhasil diupdate.');
    }

    public function destroy($id)
    {
        $user = usermodel::find($id);

        // Update data user
        $user->delete();

        return redirect()->route('dashboard')->with('success', 'Data berhasi dihapus');
    }
}
