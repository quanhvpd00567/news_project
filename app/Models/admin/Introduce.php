<?php

namespace App\Models\admin;

use App\Http\Services\CommonService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Introduce extends \App\Models\Introduce
{
    public function getListIntroduces(){
        return self::paginate(10);
    }

    public function getIntroduceById($id){
        return self::find($id);
    }

    public function createIntroduce($data){
        try {
            $this->name = $data['name'];
            $this->name_en = $data['name_en'];
            $this->content = $data['content'];
            $this->content_en = $data['content_en'];
            $this->banner = $data['banner'];
            $this->keyword = $data['keyword'];
            $this->keyword_en = $data['keyword_en'];
            $this->slug = CommonService::createSlug($data['name']);
            $this->status = \Config::get('constant.status.isShow');
            if (!isset($params['status'])){
                $this->status = \Config::get('constant.status.isNotShow');
            }
            return $this->save();
        }catch (\Exception $e){
            return false;
        }
    }

    public function updateIntroduce($data, $introduce){
        try {
            $introduce->name = $data['name'];
            $introduce->name_en = $data['name_en'];
            $introduce->content = $data['content'];
            $introduce->content_en = $data['content_en'];
            $introduce->banner = $data['banner'];
            $introduce->keyword = $data['keyword'];
            $introduce->keyword_en = $data['keyword_en'];
            $introduce->slug = CommonService::createSlug($data['name']);
            $introduce->status = \Config::get('constant.status.isShow');
            if (!isset($data['status'])){
                $introduce->status = \Config::get('constant.status.isNotShow');
            }
            return $introduce->save();
        }catch (\Exception $e){
            return false;
        }
    }

    public function deleteIntroduct($introduce){
        try {
            DB::beginTransaction();
           \App\Models\Album::where('product_id', $introduce->id)->where('type', \Config::get('constant.types.introduce'))->delete();
           $introduce->delete();
            DB::commit();
            return true;
        }catch (\Exception $e){
            DB::rollBack();
            return false;
        }
    }
}
