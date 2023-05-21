<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'desc', 'image', 'price', 'discount_price', 'category_id', 'created_at', 'updated_at', 'deleted_at'];
    protected $table = 'products';
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function productColorSize()
    {
        return $this->hasMany(ProductColorSize::class);
    }
    public function productColor()
    {
        return $this->hasMany(ProductColor::class);
    }
    public function productSize()
    {
        return $this->hasMany(ProductSize::class);
    }
}
