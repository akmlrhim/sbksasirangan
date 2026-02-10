<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WorkSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{

		foreach (range(1, 10) as $index) {
			$name = fake()->name();

			Work::create([
				'name' => $name,
				'slug' => Str::slug($name),
				'picture' => null
			]);
		}
	}
}
