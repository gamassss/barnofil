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

		public function berita()
		{
			$this->hasOne(Berita::class);
		}

		public function submissions()
		{
			$this->hasMany(Submission::class);
		}

		public function transaksis()
		{
			$this->hasMany(Transaksi::class);
		}
}
