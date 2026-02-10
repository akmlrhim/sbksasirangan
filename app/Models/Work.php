<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
	protected $fillable = ['name', 'slug', 'picture'];

	protected function picture(): Attribute
	{
		return Attribute::make(
			get: function ($value) {
				if (empty($value)) {
					return [];
				}

				$decoded = json_decode($value, true);

				if (is_array($decoded)) {
					return $decoded;
				}

				return [$value];
			},

			set: fn($value) => is_array($value) ? json_encode($value) : $value,
		);
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
