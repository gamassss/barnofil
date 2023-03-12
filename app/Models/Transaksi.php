<?php

namespace App\Models;

use App\Models\Program;
use App\Models\MetodePembayaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

		protected $guarded = ['id'];

		public function program()
		{
			return $this->belongsTo(Program::class);
		}

		public function metodes()
		{
			return $this->belongsToMany(MetodePembayaran::class, 'transaksi_metodes');
		}
}
