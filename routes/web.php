<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;


Route::middleware('throttle:30,1')->group(function () {
	Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
		$request->fulfill();

		return redirect('/admin');
	})->middleware(['auth', 'signed'])->name('verification.verify');


	// Get Image 
	Route::prefix('img')->controller(ImageController::class)->name('img.')->group(function () {
		Route::get('products/{filepath}', 'productImage')->name('products')->where('filepath', '.*');
	});


	Route::get('/', [HomeController::class, 'index'])->name('home');
	Route::get('about-us', [HomeController::class, 'aboutUs'])->name('about-us');
	Route::get('contact', [HomeController::class, 'contact'])->name('contact');
	Route::get('insight', [HomeController::class, 'insight'])->name('insight');
	Route::get('shop', [HomeController::class, 'shop'])->name('shop');
});
