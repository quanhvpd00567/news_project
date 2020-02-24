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
            $this->name = $params['name'];
            $this->name_en = $params['name_en'];
            $this->description = $params['description'];
            $this->description_en = $params['description_en'];
            $this->content = $params['content'];
            $this->content_en = $params['content_en'];
            $this->banner = $params['banner'];
            $this->keyword = $params['keyword'];
            $this->keyword_en = $params['keyword_en'];
            $this->slug = CommonService::createSlug($params['name']);
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
            $manufacturer->name = $params['name'];
            $manufacturer->name_en = $params['name_en'];
            $manufacturer->description = $params['description'];
            $manufacturer->description_en = $params['description_en'];
            $manufacturer->content = $params['content'];
            $manufacturer->content_en = $params['content_en'];
            $manufacturer->banner = $params['banner'];
            $manufacturer->keyword = $params['keyword'];
            $manufacturer->keyword_en = $params['keyword_en'];
            $manufacturer->slug = CommonService::createSlug($params['name']);
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
