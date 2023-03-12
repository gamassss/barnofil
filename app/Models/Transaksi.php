<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

		protected $guarded = ['id'];

		public function program()
		{
			return $this->belongsTo(Program::class);
		}

		public function transaksi_metodes()
		{
			return $this->hasMany(TransaksiMetode::class);
		}
}
