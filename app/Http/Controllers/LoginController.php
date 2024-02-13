<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
        $request->validate([
            "email" =>"required|email",
            "password" =>"required",
        ]);
        $user = User::where('email', '=', $request->input('email'))->first();
        if ($user) {
                if (Hash::check($request->input('password'), $user->password)) {
                        Auth::login($user);
                        return redirect()->route('dashboard');
                } else {
                    return view('auth.login')->with('fail','Invalid email or password');
                }
        } else {
            return view('auth.login')->with('fail','Invalid email or password');
        }
    }

    public function Logout()
    {
        Auth::logout();
        if (!Auth::check()) {
            return view('auth.login');
        }
    }

    public function customerLogin(Request $request)
    {
        if (!Auth::guard('customer')->attempt($request->only('customer_email','password'),$request->filled('remember'))) {
            session()->flash('message','Invalid Email or Password');
            return redirect()->intended('/flogin');
        } else {
            $x = session()->get('path');
            return redirect()->intended($x);
        }

    }

    public function customerLogout()
    {
        Auth::guard('customer')->logout();
        if (!Auth::guard('customer')->check()) {
            return redirect()->intended('/');
        }
    }
}
