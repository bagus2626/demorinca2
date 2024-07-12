<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function pageRegister() 
    {
        return view('auth.register');
    }

    public function register(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255', 
            'email' => 'required|email:dns|unique:users',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus valid.',
            'email.email.dns' => 'Email harus memiliki DNS yang valid.',
            'email.unique' => 'Email sudah digunakan.',
        ]);
        $validatedData['password'] = bcrypt($request->password);

        User::create($validatedData);

        return redirect()->route('login')->with('success', 'Registrasi Berhasil');
    }

    public function pageLogin() 
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
         $credentials = $request->validate([
            'email' => 'required|email:dns', 
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus valid.',
            'email.email.dns' => 'Email harus memiliki DNS yang valid.',
            'password.unique' => 'Password harus diisi.',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/admin/documents');
        }else {
            return redirect()->back()->with('error', 'Email atau password salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); 
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
