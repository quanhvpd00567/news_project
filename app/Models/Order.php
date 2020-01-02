<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    public function user(){
        return $this ->belongsTo('app\Models\user', 'id_user', 'id');
    }
    public function album(){
        return $this->belongsTo('app\Models\user', 'album_id', 'id');
    }
}
