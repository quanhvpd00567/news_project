<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index(){

        $item = new Product();
        $tableProduct = $item->getTable();
        $products = Product::join('categories', 'categories.id', '=', "{$tableProduct}.category_id")
            ->where("{$tableProduct}.isDelete", \Config::get('constant.delete.isNotDelete'))
            ->where("{$tableProduct}.status", \Config::get('constant.status.isShow'))
            ->where("categories.status", \Config::get('constant.status.isShow'))
            ->select("{$tableProduct}.id", "{$tableProduct}.slug", "{$tableProduct}.name", "{$tableProduct}.name_en", "{$tableProduct}.image_1", "{$tableProduct}.image_2")
            ->limit(3)
            ->get();
        $data = [
            'homeData' => HomePage::first(),
            'products' => $products
        ];

        return view('end_user.index', $data);
    }
}
