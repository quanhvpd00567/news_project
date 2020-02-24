<?php

namespace App\Models\admin;

use App\Http\Services\CommonService;
use Illuminate\Database\Eloquent\Model;

class Introduce extends \App\Models\Introduce
{
    public function getListIntroduces(){
        return self::paginate(10);
    }

    public function getIntroduceById($id){
        return self::find($id);
    }

    public function createIntroduce($params){
        try {
            $this->name = $params['name'];
            $this->name_en = $params['name_en'];
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

    public function updateIntroduce($params, $introduce){
        try {
            $introduce->name = $params['name'];
            $introduce->name_en = $params['name_en'];
            $introduce->content = $params['content'];
            $introduce->content_en = $params['content_en'];
            $introduce->banner = $params['banner'];
            $introduce->keyword = $params['keyword'];
            $introduce->keyword_en = $params['keyword_en'];
            $introduce->slug = CommonService::createSlug($params['name']);
            $introduce->status = \Config::get('constant.status.isShow');
            if (!isset($params['status'])){
                $introduce->status = \Config::get('constant.status.isNotShow');
            }
            return $introduce->save();
        }catch (\Exception $e){
            return false;
        }
    }
}
