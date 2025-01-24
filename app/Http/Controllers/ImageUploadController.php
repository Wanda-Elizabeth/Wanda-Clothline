<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('images', $imageName, 'public');


        $category = Categories::find($request->category);
        $categorySlug = $category ? $category->slug : 'default_name';

        // Save to the database
        $imageRecord = Image::create([
            'name' => $imageName,
            'path' => $imagePath,
            'category' => $categorySlug,
            'price' => $request->price,

        ]);

        return response()->json([
            'message' => 'Image uploaded successfully!',
            'image_url' => url('storage/images/' . $imageName),
        ]);
    }
}
