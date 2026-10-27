<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // 1. 建立基本查詢 Query Builder
        $query = User::query();

        // 2. 處理搜尋條件（使用 Closure 包覆 orWhere，確保 SQL 括號正確）
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%');
            });
        }

        // 3. 一次性計算所有總計數據（利用資料庫聚合函式，減少查詢次數）
        $totals = (clone $query)->selectRaw('
            count(*) as users_total,
            sum(post) as post_total,
            sum(followers) as followers_total,
            sum(followings) as followings_total
        ')->first();

        // 4. 取得分頁資料
        $users = $query->paginate(10)->withQueryString();

        // 5. 傳遞變數到視圖
        return view('users.index', [
            'users' => $users,
            'users_total' => $totals->users_total ?? 0,
            'post_total' => $totals->post_total ?? 0,
            'followers_total' => $totals->followers_total ?? 0,
            'followings_total' => $totals->followings_total ?? 0,
        ]);
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