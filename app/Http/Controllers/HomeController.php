<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Post;
use App\Models\Product;
use App\Models\Team;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
	public function index()
	{
		$title = 'Home';

		$works = Cache::remember('works_list', now()->addDays(1), function () {
			return Work::select('name', 'picture')->get();
		});

		return view('home', compact('works', 'title'));
	}

	public function aboutUs()
	{
		$title = 'About';
		return view('about-us', compact('title'));
	}

	public function contact()
	{
		$title = 'Contact';
		return view('contact', compact('title'));
	}

	public function insight(Request $request)
	{
		$title = 'Insight';

		$search = $request->get('search');
		$category = $request->get('category');
		$perPage = $request->get('page', 1) == 1 ? 10 : 9;

		$posts = Post::select('slug', 'title', 'content', 'category', 'cover_image', 'created_at')
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

		if ($request->ajax()) {
			return view('insight', compact('posts', 'categories', 'search', 'title'))->fragment('posts-area');
		}

		return view('insight', compact('posts', 'categories', 'search', 'title'));
	}

	public function article($slug)
	{
		$post = Post::where('slug', $slug)->firstOrFail();
		$title = $post->title;

		return view('article', compact('post', 'title'));
	}

	public function shop(Request $request)
	{
		$title = 'Shop';
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
			->paginate(8)
			->withQueryString();

		$categories = Product::whereNotNull('category')->distinct()->pluck('category');

		if ($request->ajax()) {
			return view('shop', compact('products', 'categories', 'search', 'title'))->fragment('products-list');
		}

		return view('shop', compact('products', 'categories', 'search', 'title'));
	}

	public function product($slug)
	{
		$product = Product::where('slug', $slug)->firstOrFail();
		$title = $product->name;

		$relatedProducts = Product::select('name', 'slug', 'picture', 'category')
			->where('category', $product->category)
			->where('id', '!=', $product->id)
			->limit(4)
			->get();

		return view('product', compact('product', 'relatedProducts', 'title'));
	}

	public function ourTeam()
	{
		$title = 'Our Team';
		$allTeams = Team::select(
			'name',
			'ig_link',
			'yt_link',
			'linkedin_link',
			'biography',
			'role',
			'profile_picture'
		)->latest()->get();

		$management = $allTeams->filter(function ($item) {
			return strtolower($item->role) !== 'artisan';
		});

		$artisans = $allTeams->filter(function ($item) {
			return strtolower($item->role) === 'team';
		});

		return view('ourteam', compact('management', 'artisans', 'title'));
	}

	public function galleries()
	{
		$title = 'Gallery';

		$galleries = Gallery::select('id', 'title', 'description', 'images')->latest()->get();

		return view('galleries', compact('galleries', 'title'));
	}
}
