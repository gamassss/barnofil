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
			$this->belongsTo(Program::class);
		}

		public function transaksi_metodes()
		{
			$this->hasMany(TransaksiMetode::class);
		}
}
