<?php

namespace App\Models\admin;

use App\Http\Services\CommonService;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends \App\Models\Manufacturer
{
    public function getListManufacturer(){
        return self::paginate(10);
    }

    public function createManufacturer($data){
        try {
            $this->name = $data['name'] ;
            $this->name_en = $data['name_en'];
            $this->description = $data['description'];
            $this->description_en = $data['description_en'];
            $this->content = $data['content'];
            $this->content_en = $data['content_en'];
            $this->banner = $data['banner'];
            $this->keyword = $data['keyword'];
            $this->keyword_en = $data['keyword_en'];
            $this->slug = CommonService::createSlug($data['name']);
            $this->image = $data['image'];
            $this->status = \Config::get('constant.status.isShow');
            if (!isset($data['status'])){
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

    public function updateManufacturer($data, $manufacturer){
        try {
            $manufacturer->name = $data['name'] ;
            $manufacturer->name_en = $data['name_en'];
            $manufacturer->description = $data['description'];
            $manufacturer->description_en = $data['description_en'];
            $manufacturer->content = $data['content'];
            $manufacturer->content_en = $data['content_en'];
            $manufacturer->banner = $data['banner'];
            $manufacturer->keyword = $data['keyword'];
            $manufacturer->keyword_en = $data['keyword_en'];
            $manufacturer->slug = CommonService::createSlug($data['name']);
            $manufacturer->image = $data['image'];
            $manufacturer->status = \Config::get('constant.status.isShow');
            if (!isset($data['status'])){
                $manufacturer->status = \Config::get('constant.status.isNotShow');
            }
            return $manufacturer->save();
        }catch (\Exception $e){
            dd($e);
            return false;
        }
    }
}
