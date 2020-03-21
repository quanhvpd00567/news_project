<?php

namespace App\Models\admin;

use App\Http\Services\CommonService;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends \App\Models\Manufacturer
{
    public function getListManufacturer(){
        return self::paginate(10);
    }

    public function createManufacturer($params){
        try {
            $this->name = empty($params['name']);
            $this->name_en = empty($params['name_en']);
            $this->description = empty($params['description']);
            $this->description_en = empty($params['description_en']);
            $this->content = empty($params['content']);
            $this->content_en = empty($params['content_en']);
            $this->banner = empty($params['banner']);
            $this->keyword = empty($params['keyword']);
            $this->keyword_en = empty($params['keyword_en']);
            $this->slug = CommonService::createSlug($params['name']);
            $this->image = $params['image'];
            $this->status = \Config::get('constant.status.isShow');
            if (!isset($params['status'])){
                $this->status = \Config::get('constant.status.isNotShow');
            }
            return $this->save();
        }catch (\Exception $e){
            return false;
        }
    }

    public function getManufacturerById($id){
        return self::find($id);
    }

    public function updateManufacturer($params, $manufacturer){
        try {
            $manufacturer->name = empty($params['name']);
            $manufacturer->name_en = empty($params['name_en']);
            $manufacturer->description = empty($params['description']);
            $manufacturer->description_en = empty($params['description_en']);
            $manufacturer->content = empty($params['content']);
            $manufacturer->content_en = empty($params['content_en']);
            $manufacturer->banner = empty($params['banner']);
            $manufacturer->keyword = empty($params['keyword']);
            $manufacturer->keyword_en = empty($params['keyword_en']);
            $manufacturer->slug = CommonService::createSlug($params['name']);
            $manufacturer->image = $params['image'];
            $manufacturer->status = \Config::get('constant.status.isShow');
            if (!isset($params['status'])){
                $manufacturer->status = \Config::get('constant.status.isNotShow');
            }
            return $manufacturer->save();
        }catch (\Exception $e){
            return false;
        }
    }
}
