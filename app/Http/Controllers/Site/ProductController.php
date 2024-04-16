<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  
  public ProductService $productService;
  public function __construct(ProductService $productService)
  {
      $this->productService = $productService;
  }
public function getall(Request $request)
{
    $product= $this->productService->getAll();
    dd($product);

}

}
