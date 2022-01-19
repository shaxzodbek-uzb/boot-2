<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // index
    // show
    // store
    // update
    // destroy
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'items' => $products
        ]);
    }
    public function store(Request $request)
    {
        $params = $this->validate($request, [
            'name' => 'required|string|max:200|min:5',
            'image' => 'required|image|max:1000',
            'description' => 'required|string|max:500',
        ]);
        $file_name = Str::slug($params['name'] . now());
        $path = $request->file('image')->storeAs('images', $file_name . '.jpg', 'public');
        $params['image'] = $path;
        $product = Product::create($params);
        return response()->json([
            'item' => $product
        ]);
    }
    public function update(Request $request, Product $product)
    {
        $params = $this->validate($request, [
            'name' => 'required|string|max:200|min:5',
            'image' => 'sometimes|image|max:1000',
            'description' => 'required|string|max:500',
        ]);
        $file_name = Str::slug($params['name'] . now());
        if ($request->hasFile('image')) {
            $path = $request->file('image')->storeAs('images', $file_name . '.jpg', 'public');
            $params['image'] = $path;
        }
        $product->update($params);
        return response()->json([
            'item' => $product
        ]);
    }
    public function show(Product $product)
    {
        // return Storage::disk('public')->download($product->image);
        // return Storage::disk('public')->response($product->image);
        return response()->json([
            'item' => $product
        ]);
    }
}