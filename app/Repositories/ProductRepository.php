<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Color;

class ProductRepository  implements RepositoryInterface
{
    public $product;
    public $color;
    
    public function __construct(Product $product , Color $color)
    {

        $this->product = $product;
        $this->color   = $color;

    }

    public function baseQuery($relations=[],$withCount=[])
    {
        $query = $this->product->select('*')->with($relations);
        foreach ($withCount as $key => $value) {
           $query->withCount($value);
        }
       return $query;
    }

    public function getbyId($id)
    {
        return $this->product->where('id', $id)->firstOrFail();
    }


    public function store($params)
    {
        return $this->product->create($params);
    }
     

    public function addColor($product , $params){
        $product->productColor()->creatMany($params['colors']);
     }


    public function update($id, $params)
    {
        $product = $this->getbyId($id);
        
        return $product->update($params);
    }

    public function delete($params)
    {
        $product = $this->getbyId($params['id']);
        return $product->delete();
    }
        

    public function getAllColors ()
    {
        $query = $this->color->newQuery()->select(['colors.*']);
       return $query;
    }



}

