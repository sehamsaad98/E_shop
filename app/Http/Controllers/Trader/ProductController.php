<?php

namespace App\Http\Controllers\Trader;

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
use Auth;

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
        return view('trader.product.index');
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
        return view('trader.product.create', compact('categories', 'colors', 'sizes'));;
    }

    

    public function store(StoreProductRequest $request)
    {
        $user = Auth::user(); // Ensure the user is authenticated
    
        // Check if the user is a trader
        if ($user->type !== 'trader') {
            return response()->json([
                'error' => 'Unauthorized',
                'user_type_provided' => $user->type, // Show the type received
                'message' => 'You must be a trader to perform this action.'
            ], 403);
        }
    
        // Retrieve the trader's brand
        $brand = $user->brand()->first(); // Retrieve the first related brand record
    
        if (!$brand) {
            return response()->json(['error' => 'No brand associated with this trader'], 404);
        }
    
        // Create a new product linked to the brand
        $product = new Product([
            'name' => $request->name,
            'desc' => $request->desc,
            'price' => $request->price,
            'image' => $request->image,
            'category_id' => $request->category_id,
            'discount_price' => $request->discount_price,
            'brand_id' => $brand->id // Setting the brand ID
        ]);
    
        // Save the product to the database under the brand
        $product->save(); // Save the product directly, as $product has all the necessary data
    
        return response()->json(['message' => 'Product added successfully'], 200);
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categories = $this->categoryService->getAll();
        $product = $this->productService->getById($id);
        
        return view('trader.product.edit', compact('categories', 'product'));
    }


    public function update($id,StoreProductRequest $request)
    {
         $this->productService->update($id, $request->validated());
        return redirect()->route('trader.products.index' , $id)->with('success', 'تمت الاضافة بنجاح');
        
    }

    public function destroy($id)
    {
        //
    }

    public function delete(ProductsProductDeleteRequest $request )
    {

        $this->productService->delete($request->validated());
        return redirect()->route('trader.products.index');
    }



}
