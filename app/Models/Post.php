<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'title',
		'slug',
		'category',
		'content',
		'source',
		'cover_image'
	];

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
