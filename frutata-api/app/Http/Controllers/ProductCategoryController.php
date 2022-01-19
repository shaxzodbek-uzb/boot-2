<?php


namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $productCategories = ProductCategory::all();
        return response()->json([
            'items' => $productCategories
        ]);
    }

    public function store(Request $request)
    {
        $params = $this->validate($request, [
            'name' => 'required|string|max:200|min:5',
        ]);

        $productCategory = ProductCategory::create($params);
        return response()->json([
            'item' => $productCategory
        ]);
    }

    public function update(Request $request, ProductCategory $productCategory)
    {
        $params = $this->validate($request, [
            'name' => 'required|string|max:200|min:5',
        ]);

        $productCategory->update($params);
        return response()->json([
            'item' => $productCategory
        ]);
    }

    public function show(ProductCategory $productCategory)
    {
        return response()->json([
            'item' => $productCategory
        ]);
    }

    public function destroy($id)
    {
        if (!$productCategory = ProductCategory::where('id', intval($id))->first())
            abort(404);

        $productCategory->delete();

        return 'ok';
    }
}