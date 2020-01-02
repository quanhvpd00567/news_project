<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Album extends Model
{
    protected $table = "albums";
    public function article(){
        return $this->belongsTo('app\Models\article', 'album_id', 'id');
    }
    public function order(){
        return $this->hasMany('app\Models\order', 'album_id', 'id');
    }
    public function image(){
        return $this->hasMany('app\Models\image', 'album_id', 'id');
    }
    public function createAlbum($request){
        $this->album_name = $request->post('album_name');
        $this->price = $request->post('price');
        $this->is_delete = 0;
        $this->is_free = $request->has('is_free') ? $request->post('is_free') : 0;
        if($this->save()){
            return true;
        }else {
            return false;
        }
    }
    public function getAlbumById($id){
        return $this->find($id);
    }
    public  function updateAlbum($request, $album){
        $album->album_name = $request->post('album_name');
        $album->price = $request->post('price');
        $album->is_free = $request->has('is_free') ? $request->post('is_free') : 0;
        $album->updated_at = Carbon::now();
        if($album->save()){
            return true;
        }else{
            return false;
        }
    }
    public function getList()
    {
        return $this->all();
    }
}
