<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $table = "categories";
    public function article(){
        return $this -> belongsTo('app\Models\Article', 'category_id', 'id');
    }
    public function createCategory($request){
        $this->category_name = $request->post('category_name');
        $this->is_delete = 0;
        if($this->save()){
            return true;
        }
        return false;
    }
    public function getCategoryById($id){
        return $this->find($id);
    }
    public function updateCategory($request, $category){
        $category->category_name = $request->post('category_name');
        $category->updated_at = Carbon::now();
        if($category->save()){
            return true;
        }else{
            return false;
        }
    }
    public function getList($is_delete){
        $setting = Setting::getSetting();
        return $this->where('is_delete', $is_delete)->paginate($setting->p_category);
    }

    public function deleteCategory($id)
    {
        $category = $this->getCategoryById($id);
        if ($category != null){
            $category->is_delete = 1;
            if ($category->save()){
                return true;
            }else{
                return false;
            }
        }
        return false;
    }
}
