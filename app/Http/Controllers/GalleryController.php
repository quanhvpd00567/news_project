<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;

class GalleryController extends BaseController
{
    public function index(){
        $gallery = Gallery::all();
        $item = new Product;
        $tableProduct = $item->getTable();
        $productsRelated = Product::join('categories', 'categories.id', '=', "{$tableProduct}.category_id")
            ->where("{$tableProduct}.isDelete", \Config::get('constant.delete.isNotDelete'))
            ->where("{$tableProduct}.status", \Config::get('constant.status.isShow'))
            ->where("categories.status", \Config::get('constant.status.isShow'))
            ->select("{$tableProduct}.id", "{$tableProduct}.slug", "{$tableProduct}.name", "{$tableProduct}.name_en", "{$tableProduct}.image_1", "{$tableProduct}.image_2")
            ->limit(3)
            ->get();
        $data = [
            'images' => $gallery,
            'productsRelated' => $productsRelated
        ];
        return view('end_user.gallery.index', $data);
    }
}
