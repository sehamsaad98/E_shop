<?php

namespace App\Services;
use DataTables;
use App\Repositories\CategoryRepository;
use App\Utils\ImageUpload;

class CategorySrevice{

    public $categoryRepository;


    public function __construct(CategoryRepository $repo)
    {
        $this->categoryRepository=$repo;
    }

    public function getMainCategory(){
       return $this->categoryRepository->getMainCategory();
    }

    public function dataTable(){
        $query = $this->categoryRepository->baseQuery(['parent']);
        $cats=  DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return $btn = '
                        <a href="' . Route('dashboard.categories.edit', $row->id) . '"  class="edit btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>

                        <button type="button" id="deleteBtn"  data-id="' . $row->id . '" class="btn btn-danger mt-md-0 mt-2" data-bs-toggle="modal"
                        data-original-title="test" data-bs-target="#deletemodal"><i class="fa fa-trash"></i></button>';
            })
            ->addColumn('parent', function ($row) {
                if ($row->parent) {
                    return $row->parent->name;
                }
                // return 'قسم رئيسي';
                return ($row->parent ==  0) ? 'قسم رئيسي' :   $row->parents->name;
            })
            ->addColumn('image', function ($row) {
                return '<img src="' . asset('assets/img/categories/'.$row->image) . '" width="100px" height="100px">';
            })
            ->rawColumns(['parent', 'action' , 'image' ])
            ->make(true);            
            return $cats;
    }



    public function store($params){
          $params['parent_id'] = $params['parent_id'] ?? 0;
          if  (isset($params['icon'])) {
            // Log or debug $params['icon'] here
            $params['icon'] = ImageUpload::uploadImage($params['icon'], '/img/categories/icons');
          }
          if(isset($params['image'])) {
            $params['image'] = ImageUpload::uploadImage($params['image'], '/img/categories');
        }
    
          return  $this->categoryRepository->store($params);
    }



    public function getById($id, $childrenCount = false)
    {
       return $this->categoryRepository->getById($id , $childrenCount);
    }

    
    public function update($id, $params)
    {
      $category = $this->categoryRepository->getById($id);
      $params['parent_id'] = $params['parent_id'] ?? 0;
  
      if (isset($params['image'])) {
          $params['image'] = ImageUpload::uploadImage($params['image'], '/img/categories');
      }
      if (isset($params['icon'])) {
          $params['icon'] = ImageUpload::uploadImage($params['icon'], '/img/categories/icons');
      }
  
      return $this->categoryRepository->update($category, $params);
  }
    

    public function delete($params)
    {
        $this->categoryRepository->delete($params);
    }

    public function getAll()
    {
        return $this->categoryRepository->baseQuery(['child'])->get();
    }
}