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

        $product = Product::find($id);

        if (is_null($product)){
            return $this->page_404();
        }

        $images = Album::where('type', \Config::get('constant.types.product'))
                    ->where('status', \Config::get('constant.status.isShow'))
                    ->where('product_id', $id)
                    ->first();
        $images = is_null($images) ? [] : $images->toArray();
        $productsRelated = Product::where('isDelete', \Config::get('constant.delete.isNotDelete'))
                                    ->where('status', \Config::get('constant.status.isShow'))
                                    ->where('category_id', $product->category_id)
                                    ->where('id', '<>', $id)
                                    ->select('id', 'slug','name', 'name_en', 'image_1', 'image_2')
                                    ->limit(3)
                                    ->orderBy('id', 'desc')
                                    ->get();
        $data = [
            'product' => $product,
            'images' => $images,
            'productsRelated' => $productsRelated
        ];
        return view('end_user.products.detail', $data);
    }

    public function listProduct(){
        $products = Product::where('isDelete', \Config::get('constant.delete.isNotDelete'))
            ->where('status', \Config::get('constant.status.isShow'))
            ->select('id', 'slug','name', 'name_en', 'image_1', 'image_2')
            ->orderBy('id', 'desc')
            ->get();
        $categories = Category::where('status', \Config::get('constant.status.isShow'))->get();
        $data = [
          'products' => $products,
          'categories' => $categories,
        ];
        return view('end_user.products.index', $data);
    }
}
