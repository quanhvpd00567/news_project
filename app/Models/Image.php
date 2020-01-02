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
    public function createImage($request){
        $this->album_id = $request->post('album_id');
        $this->url = $request->post('url');
        $this->is_delete = $request->post('is_delete');
        if($this->save()){
            return true;
        }else{
            return false;
        }
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
    public function getList(){
        return $this->all();
    }
}
