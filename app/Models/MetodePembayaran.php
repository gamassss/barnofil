<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    use HasFactory;

		protected $guarded = ['id'];

		public function transaksi_metodes()
		{
			$this->hasMany(TransaksiMetode::class);
		}
}
