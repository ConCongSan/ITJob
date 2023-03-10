<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static where(string $string, $email)
 * @method static orderBy(string $string, string $string1)
 * @method static find($id)
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;
    protected $table = 'users';
    protected $fillable = [
        'name',
        'username',
        'email',
        'phone',
        'password',
        'type',
        'image',
        'img_avatar',
        'provider',
        'remember_token',//Dùng để ghi nhớ đăng nhập
        'token',//Dùng để xác nhận lại mật khẩu
    ];

    // public function getPasswordAttribute(){
    //     return $this->password;
    // }
}
