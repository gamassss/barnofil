<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

		protected $guarded = ['id'];

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
