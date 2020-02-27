<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index(){

        $products = Product::limit(3)->where('isDelete', \Config::get('constant.delete.isNotDelete'))
                                     ->where('status', \Config::get('constant.status.isShow'))
                                    ->select('id', 'slug','name', 'name_en', 'image_1', 'image_2')
                                    ->get();
        $data = [
            'homeData' => HomePage::first(),
            'products' => $products
        ];

        return view('end_user.index', $data);
    }
}
