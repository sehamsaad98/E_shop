<?php
namespace App\Repositories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\Relation;

class CategoryRepository implements RepositoryInterface

{
    public $category;
 public function __construct(Category $category ) {
   $this->category = $category;
}

public function baseQuery($relations=[])
{
    return $this->category->newQuery()->select(['categories.*'])->with($relations);

}

public function getMainCategory(){
    return Category::Where('parent_id' , 0) ->orwhere('parent_id' , null)->get();


 }

 public function store($params){
    return $this->category->create($params);
 }
 
 public function getById($id , $childrenCount = false ){
    $query =  $this->category->where('id', $id);
    if($childrenCount){
        $query->withCount('child');
    }
    return $query->firstOrFail();

 }
 public function update($category, $params)
 {
     return $category->update($params);
 }

//  public function delete($params){
//     $category= $this->getById($params['id']);
//     dd($category);
//     return $category->delete();
// }
public function delete($params)
{
    $category = $this->getbyId($params['id']);
    return $category->delete();
}


}