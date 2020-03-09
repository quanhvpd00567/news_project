<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Category extends Model
{
    protected $table = "categories";
    public function products(){
        $item = new \App\Models\Product;
        $tableProduct = $item->getTable();
        return $this->hasMany(Product::class, 'category_id', 'id')
            ->where("{$tableProduct}.isDelete", \Config::get('constant.delete.isNotDelete'))
            ->where("{$tableProduct}.status", \Config::get('constant.status.isShow'));
    }
}
