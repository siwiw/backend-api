<?php

namespace App\Services;

class ProductService
{
    public function getProducts()
{
    return \App\Models\Product::all();
}
}