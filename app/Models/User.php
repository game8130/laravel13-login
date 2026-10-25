<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property int $post
 * @property int $followers
 * @property int $followings
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */

#[Fillable(['name', 'email', 'password', 'post', 'followers', 'followings'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'post' => 'integer',
            'followers' => 'integer',
            'followings' => 'integer',
        ];
    }

    public function getAvatarAttribute()
    {
        $path = 'assets/images/users/user-' . $this->id . '.jpg';

        // 如果資料庫有 avatar 欄位，可以優先讀取資料庫
        if ($this->attributes['avatar'] ?? false) {
            return asset('storage/' . $this->attributes['avatar']);
        }

        // 否則檢查靜態檔案是否存在
        if (file_exists(public_path($path))) {
            return asset($path);
        }

        // 預設頭像
        return asset('assets/images/users/user-1.jpg');
    }
}
