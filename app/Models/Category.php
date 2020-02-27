<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $table = "categories";
    public function products(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
