<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Categories\CategoryDelete;
use App\Http\Requests\Dashboard\Categories\CategoryDeleteRequest;
use App\Http\Requests\Dashboard\Categories\CategoryStoreRequest;
use App\Http\Requests\Dashboard\Categories\CategoryUpdateRequest;
use App\Models\Category;
use App\Services\CategorySrevice;
use Illuminate\Http\Request;
use DataTables;
class CategoryController extends Controller
{
    // make constructor to bind CategoryService 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
       public $categorySrevice;
     public function __construct(CategorySrevice $categorySrevice)
     {
       $this->categorySrevice = $categorySrevice;
     }
    public function index()
    {
        $mainCategories =$this->categorySrevice->getMainCategory();
        return view('dashboard.categories.index', compact('mainCategories' ));
    }



    public function getall(){
       return $this->categorySrevice->dataTable();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {

       $this->categorySrevice->store($request->validated());
       return redirect()->route('dashboard.categories.index')->with('success', 'تمت الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $category= $this->categorySrevice->getById($id, true );
        $mainCategories =$this->categorySrevice->getMainCategory();
     return  view('dashboard.categories.edit',compact('category' , 'mainCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id ,CategoryUpdateRequest $request)
    {
        $new=$this->categorySrevice->update($id,$request->validated());
        return redirect()->route('dashboard.categories.edit' , $id)->with('success', 'تمت الاضافة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function delete(CategoryDeleteRequest $request )
     {
         $this->categorySrevice->delete($request->validated());
         return redirect()->route('dashboard.categories.index');
     }
    public function destroy($id)
    {
        //
    }
 


}
