<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		foreach (range(1, 10) as $items) {
			$name = fake()->name();

			Team::create([
				'name' => $name,
				'slug' => Str::slug($name),
				'biography' => fake()->paragraph(3),
				'ig_link' => fake()->url(),
				'yt_link' => fake()->url(),
				'linkedin_link' => fake()->url(),
				'role' => fake()->randomElement(['artisan', 'team']),
				'profile_picture' => null
			]);
		}
	}
}
