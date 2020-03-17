<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Country extends Model
{
    protected $table = 'countries';
    public function member(){
        return $this->hasMany('app/Models/Member', 'country_id', 'id');
    }
    public function createCountry($request){
        $this->country_name = $request->post('country_name');
        if($this->save()) {
            return true;
        }else{
            return false;
        }
    }
    public function getCountryById($id){
        return $this->find($id);
    }
    public function updateCountry($request, $country){
        $country->country_name = $request->post('country_name');
        $country->updated_at = Carbon::now();
        if($country->save()){
            return true;
        }else{
            return false;
        }
    }
    public function getList(){
        return $this->all();
    }
}
