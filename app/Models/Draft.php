<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    use HasFactory;

		protected $fillable = [
			'title',
			'category_id',
			'user_id',
			'body',
			'slug',
			'excerpt',
			'thumbnail',
			'status',
			'is_headline'

		];

		public function category()
		{
				return $this->belongsTo(Category::class);
		}

		public function user()
		{
			return $this->belongsTo(User::class);
		}
}
