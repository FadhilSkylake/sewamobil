<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisModel;

class RegisController extends Controller
{
    public function index()
    {
        $RegisModel = RegisModel::all();
        return view('register.regis', compact('RegisModel'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:user',
            'password' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'no_sim' => 'required',
            // Role akan diisi otomatis sebagai 'user'
        ]);

        // Buat pengguna baru dengan peran 'user'
        $user = new RegisModel();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->nama = $request->nama;
        $user->alamat = $request->alamat;
        $user->no_telp = $request->no_telp;
        $user->no_sim = $request->no_sim;
        $user->role = 'user'; // Role diisi otomatis sebagai 'user'
        $user->save();

        return redirect()->route('login')
            ->with('success', 'User created successfully.');
    }
}
