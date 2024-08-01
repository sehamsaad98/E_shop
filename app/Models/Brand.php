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
  public function trader() {
    return $this->belongsTo(User::class, 'trader_id');
}

public function products() {
    return $this->hasMany(Product::class);
}
}
