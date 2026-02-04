<?php

use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;


Route::middleware('throttle:30,1')->group(function () {
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
});
