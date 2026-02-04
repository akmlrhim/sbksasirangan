<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		foreach (range(1, 10) as $index) {
			$name = fake()->unique()->name(2);

			Product::create([
				'name' => $name,
				'slug' => Str::slug($name),
				'category' => fake()->unique()->word(),
				'picture' => null,
				'description' => collect(range(1, 5))->map(function ($i) {
					return ($i % 2 == 0)
						? '<h2>' . fake()->sentence() . '</h2><p>' . fake()->paragraph(4) . '</p>'
						: '<p>' . fake()->paragraph(3) . '</p><ul><li>' . fake()->sentence() . '</li></ul>';
				})->implode(''),
			]);
		}
	}
}
