<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";
    public function album(){
        return $this->belongsTo('app\Models\album', 'album_id', 'id');
    }
    public function createImage($album_id, $img){
        $this->album_id = $album_id;
        $this->url = $img;
        $this->is_delete = 0;
        return $this->save();
    }
    public function getImageById($id){
        return $this->find($id);
    }
    public function updateImage($image, $request){
        $image->album_id = $request->post('album_id');
        $image->url = $request->post('url');
        $image->is_delete = $request->post('is_delete');
        $image->updated_at = Carbon::now();
        if($image->save()){
            return true;
        }else{
            return false;
        }
    }
    public function getList($isPageUser = false){
        if ($isPageUser){
            return $this->where('is_delete', 0)->get();
        }
        return $this->where('is_delete', 0)->paginate(10);
    }

    public function deleteImage($image)
    {
        $image->is_delete = 1;
        return $image->save();
    }
}
