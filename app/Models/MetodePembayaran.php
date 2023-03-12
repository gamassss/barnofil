<?php

namespace App\Models;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MetodePembayaran extends Model
{
    use HasFactory;

		protected $guarded = ['id'];

		public function transaksis()
		{
			return $this->belongsToMany(Transaksi::class, 'transaksi_metodes');
		}
}
