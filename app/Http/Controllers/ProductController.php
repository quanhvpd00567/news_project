<?php

namespace App\Http\Controllers;

use App\Models\admin\Product;
use App\Models\Album;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    public function detailProduct($paramUrl) {
        $url = str_replace_first(\Config::get('constant.keys_url.product'), '', $paramUrl);
        $argUrl = explode('_', $url);
        if (count($argUrl) == 1){
            return $this->page_404();
        }
        $id = $argUrl[0];
        $item = new \App\Models\Product();
        $tableProduct = $item->getTable();
        $product = Product::join('categories', 'categories.id', '=', "{$tableProduct}.category_id")
            ->where("{$tableProduct}.isDelete", \Config::get('constant.delete.isNotDelete'))
            ->where("{$tableProduct}.status", \Config::get('constant.status.isShow'))
            ->where("{$tableProduct}.id", '=' , (int) $id)
            ->where("categories.status", \Config::get('constant.status.isShow'))
            ->select("{$tableProduct}.*")->first();

        if (is_null($product)){
            return $this->page_404();
        }

        $images = Album::where('type', \Config::get('constant.types.product'))
                    ->where('status', \Config::get('constant.status.isShow'))
                    ->where('product_id', $id)
                    ->first();
        $images = is_null($images) ? [] : $images->toArray();

        $item = new \App\Models\Product;
        $tableProduct = $item->getTable();
        $productsRelated = Product::join('categories', 'categories.id', '=', "{$tableProduct}.category_id")
                ->where("{$tableProduct}.isDelete", \Config::get('constant.delete.isNotDelete'))
                ->where("{$tableProduct}.status", \Config::get('constant.status.isShow'))
                ->where("categories.status", \Config::get('constant.status.isShow'))
                ->where("{$tableProduct}.id", '<>', $id)
                ->select("{$tableProduct}.id", "{$tableProduct}.slug", "{$tableProduct}.name", "{$tableProduct}.name_en", "{$tableProduct}.image_1", "{$tableProduct}.image_2")
                ->limit(3)
                ->get();

        $data = [
            'product' => $product,
            'images' => $images,
            'productsRelated' => $productsRelated
        ];
        return view('end_user.products.detail', $data);
    }

    public function listProduct(){
        $categories = Category::where('status', \Config::get('constant.status.isShow'))->get();
        $data = [
          'categories' => $categories,
        ];
        return view('end_user.products.index', $data);
    }

    public function categoriesProduct($paramUrl){
        $url = str_replace_first(\Config::get('constant.keys_url.category'), '', $paramUrl);
        $argUrl = explode('_', $url);

        if (count($argUrl) == 1){
            return $this->page_404();
        }

        $id = $argUrl[0];
        $categories = Category::where('status', \Config::get('constant.status.isShow'))->where('id', $id)->get();
        $data = [
            'categories' => $categories,
        ];
        return view('end_user.products.index', $data);
    }
}
