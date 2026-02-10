<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	protected $casts = [
		'images' => 'array'
	];

	protected $fillable = [
		'title',
		'description',
		'images'
	];
}
