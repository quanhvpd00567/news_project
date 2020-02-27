<?php

namespace App\Http\Controllers;

use App\Models\Introduce;
use App\Models\Product;
use Illuminate\Http\Request;

class AboutUsController extends BaseController
{
    public function detail($slug){
        $url = str_replace_first(\Config::get('constant.keys_url.introduce'), '', $slug);
        $argUrl = explode('_', $url);
        if (count($argUrl) == 1){
            return $this->page_404();
        }
        $id = $argUrl[0];
        $introduce = Introduce::where('id', $id)->where('status', \Config::get('constant.status.isShow'))->first();
        if (is_null($introduce)){
            return $this->page_404();
        }
        $item = new Product;
        $tableProduct = $item->getTable();
        $products = Product::join('categories', 'categories.id', '=', "{$tableProduct}.category_id")
            ->where("{$tableProduct}.isDelete", \Config::get('constant.delete.isNotDelete'))
            ->where("{$tableProduct}.status", \Config::get('constant.status.isShow'))
            ->where("categories.status", \Config::get('constant.status.isShow'))
            ->select("{$tableProduct}.id", "{$tableProduct}.slug", "{$tableProduct}.name", "{$tableProduct}.name_en", "{$tableProduct}.image_1", "{$tableProduct}.image_2")
            ->limit(3)
            ->get();

        $data = [
            'introduce' => $introduce,
            'productsRelated' => $products
        ];
        return view('end_user.about-us.detail', $data);
    }
}
