<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
     public function login(){
        return view('admin.admin');
    }
     public function settings(){
        return view('admin.settings');
    }

    public function adminLogin(Request $request)
    {
        // Validate request
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Check email exist karta hai ya nahi
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'This email is not registered.',
            ])->withInput($request->only('email'));
        }

        // Email exist karta hai → ab password check karo
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'password' => 'Incorrect password.',
            ])->withInput($request->only('email'));
        }

        // Agar dono sahi hai to login
        Auth::login($user, $request->filled('remember'));

        return redirect()->intended('/admin/dashboard')
            ->with('success', 'Welcome back, ' . $user->name . '!');
    }
}
