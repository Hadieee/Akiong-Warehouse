<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function registerAction(Request $request)
{
    if (empty($request->name) || empty($request->username) || empty($request->password) || empty($request->role)) {
        session()->flash('error', '*Semua data harus diisi');
        return redirect('/register');
    }

    User::create([
        'name' => $request->name,
        'username' => $request->username,
        'password' => Hash::make($request->password),
        'role' => $request->role,
    ]);

    session()->flash('success', 'Akun berhasil dibuat!');
    return redirect('/login');
}

    public function loginAction(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
            'role' => $request->role,
        ];

        if (Auth::attempt($data)) {
            $user = Auth::user();

            if ($user->role == 'manager') {
                return redirect()->route('manager.dashboard');
            } else {
                return redirect()->route('admin.dashboard');
            }
        } else {
            session()->flash('error', 'Username atau Password anda salah!');
            return redirect('/login');
        }
    }
}
