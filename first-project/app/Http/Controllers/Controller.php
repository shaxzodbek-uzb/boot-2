<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    protected $service;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index()
    {
        $items = $this->service->list();
        return response()->json($items);
    }
    public function store(Request $request)
    {
        $items = $this->service->store($request->all());
        return response()->json($items);
    }
    
    public function update(Request $request, $id)
    {
        $product = $this->service->update($id,$request->all());
        return response()->json($product);
    }
    public function destroy($id)
    {
        $response = $this->service->delete($id);
        return response()->json($response);
    }
}