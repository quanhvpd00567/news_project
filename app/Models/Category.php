<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $table = "categories";
//    public function article(){
//        return $this -> belongsTo('app\Models\Article', 'category_id', 'id');
//    }
}
