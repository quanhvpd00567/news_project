<?php

namespace App\Models\admin;

use App\Http\Services\CommonService;
use Illuminate\Support\Facades\Session;

class Product extends \App\Models\Product
{
    public function category(){
        return $this->belongsTo(Category::class,'category_id', 'id');
    }

    public function createProduct($params)
    {
        try {
            $this->name = $params['name'];
            $this->name_en = $params['name_en'];
            $this->description = $params['description'];
            $this->description_en = $params['description_en'];
            $this->keyword = $params['keyword'];
            $this->keyword_en = $params['keyword_en'];
            $this->content = $params['content'];
            $this->content_en = $params['content_en'];
            $this->purpose = $params['purpose'];
            $this->purpose_en = $params['purpose_en'];
            $this->nutrition = $params['nutrition'];
            $this->nutrition_en = $params['nutrition_en'];
            $this->category_id = $params['category_id'];
            $this->slug = CommonService::createSlug($params['name']);
            $this->status = \Config::get('constant.delete.isNotShow');
            $this->isDelete = \Config::get('constant.delete.isNotDelete');
            $this->image_1 = $params['image_1'];
            $this->image_2 = $params['image_2'];

            if (isset($params['status'])) {
                $this->status = \Config::get('constant.status.isShow');
            }
            return $this->save();
        } catch (\Exception $e){
            return false;
        }
    }

    public function getProducts(){
        return self::paginate(10);
    }

    public function getProductById($id){
        return self::find($id);
    }

    public function updateProduct($params, $product)
    {
        try {
            $product->name = $params['name'];
            $product->name_en = $params['name_en'];
            $product->description = $params['description'];
            $product->description_en = $params['description_en'];
            $product->keyword = $params['keyword'];
            $product->keyword_en = $params['keyword_en'];
            $product->content = $params['content'];
            $product->content_en = $params['content_en'];
            $product->purpose = $params['purpose'];
            $product->purpose_en = $params['purpose_en'];
            $product->nutrition = $params['nutrition'];
            $product->nutrition_en = $params['nutrition_en'];
            $product->category_id = $params['category_id'];
            $product->slug = CommonService::createSlug($params['name']);
            $product->status = \Config::get('constant.delete.isNotShow');
            $product->isDelete = \Config::get('constant.delete.isNotDelete');
//            $product->image_1 = Session::get('image_1_edit', null);
//            $product->image_2 = Session::get('image_2_edit', null);
            $product->image_1 = $params['image_1'];
            $product->image_2 = $params['image_2'];
            if (isset($params['status'])) {
                $product->status = \Config::get('constant.status.isShow');
            }
            return $product->save();
        } catch (\Exception $e){
            dd($e);
            return false;
        }
    }
}
