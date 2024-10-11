<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman register
    public function register(){
        return view("pages.extra.register");
    }

    // Menangani pendaftaran user
    public function storeRegister(Request $request){
        // Validasi input
        $request->validate([
            'name'      => 'required|max:255',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required',
        ],[
            'name.required'         => 'Nama harus diisi',
            'name.max'              => 'Nama maksimal 255 karakter',
            'email.required'        => 'Email harus diisi',
            'email.unique'          => 'Email sudah terdaftar',
            'password.required'     => 'Password harus diisi',
            'password.min'          => 'Password harus minimal 8 karakter',
        ]);

        // Simpan user baru
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect ke halaman login setelah berhasil registrasi
        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login');
    }

    // Menampilkan halaman login
    public function login(){
        return view('pages.extra.login');
    }

    // Menangani login user
    public function storeLogin(Request $request){
        // Validasi input login
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Mencoba login
        if (Auth::attempt($credentials)) {
            // Regenerasi session untuk keamanan
            $request->session()->regenerate();

            // Redirect ke dashboard setelah login sukses
            return redirect()->intended('/');
        } else {
            // Redirect kembali ke login dengan pesan error jika gagal
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->onlyInput('email');
        }
    }

    // Menangani logout user
    public function logout(Request $request){
        Auth::logout();

        // Invalidasi session dan token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login setelah logout
        return redirect('/login');
    }
}
