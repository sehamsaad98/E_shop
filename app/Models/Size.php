<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model
{
    use HasFactory ;
    protected $fillable = ['id', 'size'];
    protected $table = 'sizes';
 
    public function colors()
    {
        return $this->belongsToMany(Color::class, 'productColorSize')->withPivot('product_id');
    }
    
   
    // public function productColorSize()
    // {
    //     return $this->hasMany(ProductColorSize::class, 'size_id');
    // }
    // public function colors()
    // {
    //     return $this->belongsToMany(Color::class, 'product_color_size', 'size_id', 'color_id');
    // }
}
