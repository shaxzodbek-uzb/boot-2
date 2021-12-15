<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return response()->json([
            'partners' => $partners
        ]);
    }

    public function store(Request $request)
    {
        $params = $this->validate($request, [
            'name' => 'required|string|unique:partners|max:200|min:5',
            'image' => 'required|image|max:1000',
        ]);

        $file_name = Str::slug($params['name'] . now());
//        $path = $request->file('image')->storeAs('images.product', $file_name . '.jpg', 'public');
        $path = $request->file('image')->storeAs('images', $file_name . '.jpg', 'public');
        $params['image'] = $path;
        $partner = Partner::create($params);
        return response()->json([
            'partner' => $partner
        ]);
    }


}
