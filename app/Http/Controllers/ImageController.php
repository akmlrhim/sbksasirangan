<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
	public function productImage($filename)
	{
		$path = 'private/' . $filename;

		if (!Storage::disk('local')->exists($path)) {
			abort(404);
		}

		$file = Storage::disk('local')->get($path);
		$type = Storage::disk('local')->mimeType($path);

		$response = Response::make($file, 200);
		$response->header("Content-Type", $type);
		$response->header("Cache-Control", "public, max-age=86400");

		return $response;
	}
}
