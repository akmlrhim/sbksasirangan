<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
	protected $fillable = ['name', 'slug', 'picture'];

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
