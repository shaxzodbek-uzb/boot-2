<?php

namespace App\Http\Controllers;

use Market\WMS\Services\ProductCategoryService;

class ProductCategoryController extends Controller
{
    protected $service;
    public function __construct(ProductCategoryService $service) {
        $this->service = $service;
    }
}