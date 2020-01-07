<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    protected $table = "orders";
    public function user(){
        return $this ->belongsTo('app\Models\user', 'user_id', 'id');
    }
    public function album(){
        return $this->belongsTo('app\Models\user', 'album_id', 'id');
    }

    public static function buy_success($album_id){
        $data = self::where('user_id', Auth::user()->id, $album_id)->get();
        return count($data) > 0;
    }
}
