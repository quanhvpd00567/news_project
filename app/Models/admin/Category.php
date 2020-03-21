<?php

namespace App\Models\admin;

use App\Http\Services\CommonService;
use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Config;

class Category extends \App\Models\Category
{

    public function parentMenu(){
       return $this->hasOne(Category::class,'id', 'parent_id');
    }

    public function createCategory($param)
    {
        try {
            $this->name = $param['name'];
            $this->name_en = $param['name_en'];
            $this->slug = CommonService::createSlug($param['name']);
            $this->status = \Config::get('constant.status.isShow');
            $this->isDelete = \Config::get('constant.delete.isNotDelete');
            if (!isset($param['status'])) {
                $this->status = \Config::get('constant.delete.isNotShow');
            }
            return $this->save();
        }catch (\Exception $e){
            return false;
        }
    }

    public function updateCategory($param, $category) {
        try {
            $category->name = $param['name'];
            $category->name_en = $param['name_en'];
            $category->slug = CommonService::createSlug($param['name']);
            if (isset($param['status'])) {
                $category->status = \Config::get('constant.status.isShow');
            }else{
                $category->status = \Config::get('constant.status.isNotShow');
            }
            return $category->save();
        }catch (\Exception $e){
            return false;
        }
    }

    public function getList(){
        return self::whereNotNull('parent_id')->get();
    }

    public function getCategoryParent()
    {
        return self::whereNull('parent_id')->get();
    }

    public function createMenu($param)
    {
        try {
            $this->name = $param['name'];
            $this->name_en = $param['name_en'];
            $this->slug = CommonService::createSlug($param['name']);
            $this->status = \Config::get('constant.status.isShow');
            $this->isDelete = \Config::get('constant.delete.isNotDelete');
            if (!isset($param['status'])) {
                $this->status = \Config::get('constant.delete.isNotShow');
            }
            return $this->save();
        }catch (\Exception $e){
            return false;
        }
    }

    public function getMenu($id){
        return self::find($id);
    }

    public function updateMenu($param, $menu) {
        try {
            $menu->name = $param['name'];
            $menu->name_en = $param['name_en'];
            $menu->slug = CommonService::createSlug($param['name']);
            if (isset($param['status'])) {
                $menu->status = \Config::get('constant.status.isShow');
            }else{
                $menu->status = \Config::get('constant.status.isNotShow');
            }
            return $menu->save();
        }catch (\Exception $e){
            return false;
        }
    }

    public function deleteMenu($id){
        $menu = $this->getMenu($id);
        if (is_null($menu)){
            return false;
        }
            $menu->isDelete = \Config::get('constant.delete.isDelete');
        return $menu->save();
    }

    public function restoreMenu($id){
        $menu = $this->getMenu($id);
        if (is_null($menu)){
            return false;
        }
        $menu->isDelete = \Config::get('constant.delete.isNotDelete');
        return $menu->save();
    }
}
