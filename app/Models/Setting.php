<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'desc', 'address', 'whatsapp', 'phone', 'email', 'logo', 'favicon', 'facebook', 'twitter', 'instgram', 'youtube', 'tiktok'];
    protected $table = 'settings';
}
