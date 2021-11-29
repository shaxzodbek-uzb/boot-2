<?php
namespace Market\Core\Factories;

use Market\WMS\Resources\Product;
use Market\WMS\Resources\ProductCategory;

class ResourceFactory {
    static public function getInstance(string $slug)
    {
        switch ($slug) {
            case 'products':
                return new Product;
            case 'product-categories':
                return new ProductCategory;
        }
    }
}