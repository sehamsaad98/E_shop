<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Color;

class ColorRepository  
{
    public $product;
    public $color;
    public function __construct(Product $product , Color $color)
    {

        $this->product = $product;
        $this->color   = $color;

    }

   
    public function getAllColors ()
    {
        $query = $this->color->newQuery()->select(['colors.*']);
       return $query;
    }
   
    public function store($params)
    {
        return $this->color->create($params);
    }
    
    public function update($id, $params){
        
        $color =$this->
        color->find($id);
        $color->update($params);
        return $color;
        }
        public function delete($params){
            $color = $this->color->find($params['id
            ']);
            $color->delete();
            return $color;
        }

        public function baseQuery($relations=[])

        {
            $query = $this->color->newQuery()->select(['colors.*']);
            return $query;
        }
        
        // public function getAllColors ()
        // {
        //     $query = $this->color->newQuery()->select(['colors.*']);
        //    return $query;
        // }

    







}