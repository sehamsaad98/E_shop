<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
  use HasFactory , SoftDeletes;
  protected $fillable = ['name', 'image', 'user_id', 'status'];
  protected $table = 'brands';
  public function product()
  {
      return $this->hasMany(Product::class, 'brand_id');
  }
}
