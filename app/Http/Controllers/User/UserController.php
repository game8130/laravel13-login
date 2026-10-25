<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);

        // 將 $users 傳遞到 dashboard 視圖
        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        // 1. 驗證輸入欄位
        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // 2. 建立新使用者（密碼務必 Hash 加密）
        User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // 3. 成功後帶着提示訊息重導向回原頁面
        return redirect()->back()->with('success', '使用者新增成功！');
    }

    public function update(Request $request, User $user)
    {
        // 1. 驗證欄位
        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            // 驗證 email 唯一性，但忽略目前這一位 user 的 ID
            'email'    => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            // 密碼設為選填（nullable），有填才更新
            'password' => ['nullable', 'string', 'min:8'],
            'post' => ['integer'],
            'followers' => ['integer'],
            'followings' => ['integer'],
        ]);

        // 2. 更新 basic 資料
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->post = $validated['post'];
        $user->followers = $validated['followers'];
        $user->followings = $validated['followings'];

        // 3. 如果有輸入新密碼才進行雜湊更新
        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return redirect()->back()->with('success', '使用者資料更新成功！');
    }

    public function destroy(User $user)
    {
        // 防呆：如果想刪除的是目前正在登入的自己，禁止刪除
        if (auth()->id() === $user->id) {
            return redirect()->back()->with('error', '您不能刪除目前登入中的帳號！');
        }

        // 執行刪除
        $user->delete();

        // 帶訊息導向回上一頁
        return redirect()->back()->with('success', '使用者刪除成功！');
    }
}