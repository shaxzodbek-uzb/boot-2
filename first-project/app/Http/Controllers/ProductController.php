<?php

namespace App\Http\Controllers;
use Market\WMS\Services\ProductService;

class ProductController extends Controller
{
    protected $service;
    public function __construct(ProductService $service) {
        $this->service = $service;
    }
}