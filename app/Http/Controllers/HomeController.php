<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		return view('home');
	}

	public function aboutUs()
	{
		return view('about-us');
	}

	public function contact()
	{
		return view('contact');
	}

	public function insight()
	{
		$posts = Post::paginate(9);
		return view('insight', compact('posts'));
	}

	public function shop()
	{
		$products = Product::select(
			'slug',
			'name',
			'description',
			'category',
			'picture'
		)->paginate(9);

		return view('shop', compact('products'));
	}
}
