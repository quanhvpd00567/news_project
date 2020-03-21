<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = [
        'user_id', 'album_id'
    ];
    public function user(){
        return $this ->belongsTo('app\Models\user', 'user_id', 'id');
    }
    public function album(){
        return $this->belongsTo('app\Models\Album', 'album_id', 'id');
    }

    public static function buy_success($album_id){
        $data = self::where('user_id', Auth::user()->id)->where('album_id', $album_id)->get();
        return count($data) > 0;
    }

    public function addOrder($datas){
        $this->user_id = Auth::user()->id;
        $this->album_id = $datas->album_id;
        return $this->save();
    }

    public function getHistoryByUserId($user_id){
        return $this::where('user_id', $user_id)->orderBy('id', 'desc')->paginate(10);
    }
}
