<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException; // 記得引入這個

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // 指向登入頁面
    }

    public function login(Request $request)
    {
        // 1. 驗證欄位
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->filled('remember');

        // 2. 嘗試登入
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            
            // 登入成功：重新導向到後台或首頁
            return redirect()->intended('/dashboard');
        }

        // 3. 登入失敗：拋出驗證錯誤，並將資料帶回上一頁
        throw ValidationException::withMessages([
            'email' => '登入失敗，帳號或密碼錯誤。',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}