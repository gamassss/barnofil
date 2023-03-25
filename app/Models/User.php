<?php

namespace App\Models;

use App\Models\Artikel;
use App\Models\Program;
use App\Models\Submission;
use App\Models\SocialAccount;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Authenticatable implements MustVerifyEmail, CanResetPasswordContract
{
    use HasApiTokens, HasFactory, Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
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

    protected $attributes = [
        'role' => 'user',
        'metode_registrasi' => 'form',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

		public function program_doas()
		{
			return $this->belongsToMany(Program::class, 'doas');
		}

		public function donasis()
		{
			return $this->belongsToMany(Program::class, 'donasis');
		}

		public function programs()
		{
			return $this->hasMany(Program::class);
		}

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function artikels()
    {
        return $this->hasMany(Artikel::class);
    }

    public function socialAccounts()
    {
        return $this->hasMany(SocialAccount::class);
    }
}
