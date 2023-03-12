<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function doa_programs()
    {
        return $this->belongsToMany(User::class, 'doas');
    }

    public function berita()
    {
        return $this->hasOne(Berita::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
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
