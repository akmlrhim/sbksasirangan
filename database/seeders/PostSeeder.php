<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */


	public function run()
	{
		$title = fake()->name();

		return [
			'title' => $title,
			'slug' => Str::slug($title),
			'category' => fake()->word(),
			'cover_image' => null,
			'content' => fake()->sentence(6),
			'source' => fake()->url()
		];
	}
}
