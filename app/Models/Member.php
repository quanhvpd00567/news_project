<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    public function country(){
        return $this->belongsTo('app/Models/country', 'country_id', 'id');
    }
}
