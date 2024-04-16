<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\CategorySrevice;
use App\Services\ProductService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public CategorySrevice $categoryService;
  public ProductService $productService;
  public function __construct(CategorySrevice $categoryService, ProductService $productService)
  {
      $this->productService = $productService;
      $this->categoryService = $categoryService;

  }

  public function getall(){
    $categories= $this->categoryService->getAll();
    return view('site.index',compact('categories'));

 }
    public function index()
    {
            // all products 
            $products = Product::take(10)->get();
           $mainCategories = $this->categoryService->getMainCategory();
          $categories= $this->categoryService->getAll();
          return view('site.index', compact('categories', 'mainCategories', 'products'));
        }


}
