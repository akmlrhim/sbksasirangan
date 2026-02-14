<?php

use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('lang/{locale}', function ($locale) {
	if (in_array($locale, ['id', 'en'])) {
		session()->put('locale', $locale);
		return response()->json(['status' => 'success']);
	}
	return response()->json(['status' => 'error'], 400);
})->name('switch.language');

Route::middleware('throttle:30,1')->group(function () {

	Route::get('/server-setup', function () {
		Artisan::call('migrate --force');
		Artisan::call('config:cache');
		Artisan::call('route:cache');
		Artisan::call('view:cache');

		return "Migrasi dan Cache Berhasil diperbarui!";
	});


	Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
		$request->fulfill();

		return redirect('/admin');
	})->middleware(['auth', 'signed'])->name('verification.verify');

	Route::get('/', [HomeController::class, 'index'])->name('home');
	Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about-us');
	Route::get('contact', [HomeController::class, 'contact'])->name('contact');
	Route::get('insight', [HomeController::class, 'insight'])->name('insight');
	Route::get('article/{params}', [HomeController::class, 'article'])->name('post.show');
	Route::get('shop', [HomeController::class, 'shop'])->name('shop');
	Route::get('product/{params}', [HomeController::class, 'product'])->name('product.show');
	Route::get('our-team', [HomeController::class, 'ourTeam'])->name('our-team');
	Route::get('gallery', [HomeController::class, 'galleries'])->name('gallery');
});
