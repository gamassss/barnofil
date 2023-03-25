<?php

namespace App\Models;

use App\Models\User;
use App\Models\Berita;
use App\Models\Transaksi;
use App\Models\Submission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function doa_programs()
    {
        return $this->belongsToMany(User::class, 'doas');
    }

		public function donasis()
		{
			return $this->belongsToMany(User::class, 'donasis');
		}

    public function berita()
    {
        return $this->hasOne(Berita::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
