<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

		public function kategori()
		{
			return $this->belongsTo(Kategori::class);
		}

		public function user()
		{
			return $this->belongsTo(User::class);
		}
}
