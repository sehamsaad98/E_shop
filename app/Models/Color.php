<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = ['id', 'color', 'image'];
    protected $table = 'colors';
    

    public function products()
    {
        return $this->belongsToMany(Product::class, 'productColorSize')->withPivot('size_id');
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'productColorSize')->withPivot('product_id');
    }
}
