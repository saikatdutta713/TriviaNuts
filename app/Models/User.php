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
        return auth()->check() && auth()->user()->role == 1;
    }

    public static function isAdmin()
    {
        return auth()->check() && auth()->user()->role == 2;
    }

    public static function isEditor()
    {
        return auth()->check() && auth()->user()->role == 3;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {
        return $this->roles->contains('name', $role);
    }
}
