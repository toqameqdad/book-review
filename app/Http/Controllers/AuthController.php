<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // صفحة التسجيل
    public function signup()
    {
        return view('auth.signup');
    }

    // حفظ المستخدم الجديد
    public function signupStore(SignupRequest $request)
    {
        $data = $request->validated();

        // هاش لكلمة السر
        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect()->route('login')->with('success', 'Account created successfully');
    }

    // صفحة تسجيل الدخول
    public function login()
    {
        return view('auth.login');
    }

    // عملية تسجيل الدخول
public function showLoginForm(LoginRequest $request)
{
    $credentials = $request->validated();

    // للتأكد
    if (auth()->attempt($credentials)) {
        $request->session()->regenerate();  // لازم يكون session شغال
        return redirect()->intended(route('books.index'))->with('success', 'Logged in successfully');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}



    // تسجيل الخروج
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logged out successfully');
    }
}
