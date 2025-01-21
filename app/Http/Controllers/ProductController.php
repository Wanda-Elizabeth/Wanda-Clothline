<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Image;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller

{

    public function index()
    {
        $images = Image::all();
        return response()->json($images);
    }



    public function category($category)
    {
        $images = Image::where('category', $category)->get();
        $images = $images->map(function ($image) {
            $image->path = asset('storage/images/' . basename($image->path));
            return $image;
        });

        return response()->json($images);
    }

    public function getCategories()
    {
        $categories = Categories::all();
        return response()->json($categories);
    }





}
