<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Product\ProductDeleteRequest;
use App\Http\Requests\Dashboard\Products\ProductDeleteRequest as ProductsProductDeleteRequest;
use App\Http\Requests\Dashboard\Products\StoreProductRequest;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColorSize;
use App\Models\Size;
use App\Services\CategorySrevice;
use App\Services\ColorService;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    public CategorySrevice $categoryService;
    public ProductService $productService;
    public ColorService    $colorService;
    public function __construct(CategorySrevice $categoryService, ProductService $productService, ColorService $colorService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
        $this->colorService    = $colorService;
    }

    public function index()
    {
        return view('dashboard.product.index');
    }

    public function getall(Request $request)
    {
        return $this->productService->datatable();
    }

    // public function getSizes(Request $request, $color_id)
    // {
    //     try {
    //         // Find the color
    //         $color = Color::findOrFail($color_id);
    //           // Get sizes associated with the color
    //          // get all sizes 
    //          $sizes = Size::all();

    //         // Get sizes associated with the color
    //         // $sizes = $color->sizes;

    //         // Return the color and sizes as JSON response
    //         return response()->json([
    //             'name' => $color->name,
    //             'sizes' => $sizes
    //         ]);
    //     } catch (\Exception $e) {
    //         // Handle any exceptions
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
    // }


    public function create()
    {

        $categories = $this->categoryService->getAll();
        $colors = $this->colorService->getAll();
        $sizes = Size::all();
        return view('dashboard.product.create', compact('categories', 'colors', 'sizes'));;
    }

    

    public function store(StoreProductRequest $request)
    {
         $this->productService->store($request->validated());
        return redirect()->route('dashboard.products.index');
    
    
    }




    public function edit($id)
    {
        $categories = $this->categoryService->getAll();
        $product = $this->productService->getById($id);
        
        return view('dashboard.product.edit', compact('categories', 'product'));
    }


    public function update($id,StoreProductRequest $request)
    {
         $this->productService->update($id, $request->validated());
        return redirect()->route('dashboard.products.index' , $id)->with('success', 'تمت الاضافة بنجاح');
        
    }

    public function destroy($id)
    {
        //
    }

    public function delete(ProductsProductDeleteRequest $request )
    {

        $this->productService->delete($request->validated());
        return redirect()->route('dashboard.products.index');
    }



}
