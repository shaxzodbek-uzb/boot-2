<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Market\Core\Factories\ResourceFactory;
use Market\Core\Services\CoreService;

class ResourceController extends Controller
{
    public function __construct() {
        $resource = ResourceFactory::getInstance(request()->resource);
        $service = new CoreService($resource);
        $this->service = $service;  
    }
}