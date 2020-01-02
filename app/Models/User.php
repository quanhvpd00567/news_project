<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected  $table = "users";
    public function article(){
        return $this->hasMany('app\Models\article', 'user_id', 'id');
    }
    public function order(){
        return $this->hasMany('app\Models\order', 'user_id' , 'id');
    }
    public function role(){
        return $this->belongsTo('app\Models\Role', 'role_id', 'id');
    }
    public function createUser($request){
        $this->full_name = $request->post('full_name');
        $this->gender = $request->post('gender');
        $this->birth_of_day = $request->post('birth_of_day');
        $this->email = $request->post('email');
        $this->password = $request->post('password');
        $this->role_id = $request->post('role_id');
        $this->is_block = $request->post('is_block');
        $this->is_delete = $request->post('is_delete');
        $this->count_login = $request->post('count_login');
        if($this->save()){
            return true;
        }
        return false;
    }
}
