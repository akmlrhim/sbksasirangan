<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
		'name',
		'slug',
		'category',
		'picture',
		'description'
	];

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
