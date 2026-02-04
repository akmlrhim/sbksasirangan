<?php

namespace Database\Seeders;

use App\Models\Post;
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
		foreach (range(1, 10) as $index) {

			$title = fake()->name();

			Post::create([
				'title' => $title,
				'slug' => Str::slug($title),
				'category' => fake()->randomElement(['News', 'Blog']),
				'cover_image' => null,
				'content' => collect(range(1, 5))->map(function ($i) {
					return ($i % 2 == 0)
						? '<h2>' . fake()->sentence() . '</h2><p>' . fake()->paragraph(4) . '</p>'
						: '<p>' . fake()->paragraph(3) . '</p><ul><li>' . fake()->sentence() . '</li></ul>';
				})->implode(''),
				'source' => fake()->url()
			]);
		}
	}
}
