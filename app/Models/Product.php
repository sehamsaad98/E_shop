<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = ['name', 'desc', 'image', 'price', 'discount_price', 'category_id'];
    protected $table = 'products';
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function colors()
    {
        return $this->belongsToMany(Color::class, 'productColorSize')->withPivot('size_id');
    }
    public function productColor()
    {
        return $this->hasMany(ProductColor::class, 'product_id');
    }

    // public function productSize()
    // {
    //     return $this->hasMany(ProductSize::class, 'product_id');
    // }
}
