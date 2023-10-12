<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'verification_token',
        'password',
        'gender',
        'mobile',
        'picture',
        'bio',
        'dob',
        'contribution_no',
        'last_login',
        'last_login_location',
        'badge_id',
        'newsletter_id',
        'login_type',
        'reset_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static function isSuperAdmin()
    {
        if (auth()->check() && auth()->user()->role == 1) {
            return 1;
        } else {
            return false;
        }
    }

    public static function isAdmin()
    {
        if (auth()->check() && auth()->user()->role == 2) {
            return 2;
        } else {
            return false;
        }
    }

    public static function isEditor()
    {
        if (auth()->check() && auth()->user()->role == 3) {
            return 3;
        } else {
            return false;
        }
    }

    public static function notUser()
    {
        return auth()->check() && auth()->user()->role != 0;
    }

    public function roles()
    {
        return $this->belongsTo(Role::class, 'priority');
    }

    public function hasRole($role)
    {
        return $this->roles->contains('name', $role);
    }
}
