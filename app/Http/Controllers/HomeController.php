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
		$search = request()->get('search');
		$category = request()->get('category');
		$perPage = request()->get('page', 1) == 1 ? 10 : 9;

		$posts = Post::select(
			'slug',
			'title',
			'content',
			'category',
			'cover_image',
			'created_at'
		)
			->when($search, function ($query, $search) {
				return $query->where('title', 'like', "%{$search}%");
			})
			->when($category, function ($query, $category) {
				return $query->where('category', $category);
			})
			->latest()
			->paginate($perPage)
			->withQueryString();

		$categories = Post::whereNotNull('category')->distinct()->pluck('category');

		return view('insight', compact('posts', 'categories'));
	}

	public function article($slug)
	{
		$post = Post::where('slug', $slug)->firstOrFail();
		return view('article', compact('post'));
	}

	public function shop()
	{
		$search = request()->get('search');
		$category = request()->get('category');

		$products = Product::select(
			'slug',
			'name',
			'description',
			'category',
			'picture'
		)
			->when($search, function ($query, $search) {
				return $query->where('name', 'like', "%{$search}%");
			})
			->when($category, function ($query, $category) {
				return $query->where('category', $category);
			})
			->latest()
			->paginate(12)
			->withQueryString();

		$categories = Product::whereNotNull('category')->distinct()->pluck('category');

		return view('shop', compact('products', 'categories'));
	}

	public function product($slug)
	{
		$product = Product::where('slug', $slug)->firstOrFail();

		$relatedProducts = Product::select('name', 'slug', 'picture', 'category')
			->where('category', $product->category)
			->where('id', '!=', $product->id)
			->limit(4)
			->get();

		return view('product', compact('product', 'relatedProducts'));
	}
}
