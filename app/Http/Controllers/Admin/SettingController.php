<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index() 
    {
        return view('admin.setting.index');
    }

    public function update(Request $request) 
    {
        $auth = auth()->user();

        if($request->old_password || $request->new_password) {
             if (!Hash::check($request->input('old_password'), $auth->password)) {
                return back()->with('error', 'Password lama tidak cocok');
            }

            if ($request->input('old_password') === $request->input('new_password')) {
                return back()->with('error', 'Password baru tidak boleh sama dengan password lama');
            }
        }

        $user = User::findOrFail($auth->id);
        $user->password = $request->new_password ? bcrypt($request->new_password) : $user->password;
        $user->email = $request->email ?? $user->email;
        $user->name = $request->name ?? $user->name;
        $user->save();

        return redirect()->route('settings.index')->with('success', 'Berhasil mengubah data akun');
    }
}
