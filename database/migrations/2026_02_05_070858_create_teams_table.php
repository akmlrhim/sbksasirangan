<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('teams', function (Blueprint $table) {
			$table->id();
			$table->string('name')->index();
			$table->string('slug');
			$table->string('role');
			$table->text('biography');
			$table->string('ig_link')->nullable();
			$table->string('yt_link')->nullable();
			$table->string('linkedin_link')->nullable();
			$table->string('profile_picture')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('teams');
	}
};
