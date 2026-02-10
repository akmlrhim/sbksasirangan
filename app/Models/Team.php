<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	protected $fillable = [
		'name',
		'slug',
		'biography',
		'profile_picture',
		'ig_link',
		'yt_link',
		'linkedin_link',
		'role'
	];

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
