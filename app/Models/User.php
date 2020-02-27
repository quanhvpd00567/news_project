<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected  $table = "users";

    protected $hidden = array('password', 'remember_token');

    public function article(){
        return $this->hasMany('app\Models\article', 'user_id', 'id');
    }
    public function order(){
        return $this->hasMany('app\Models\order', 'user_id' , 'id');
    }
    public function role(){
        return $this->belongsTo('app\Models\Role', 'role_id', 'id');
    }



    public function is_admin(){
        if($this->role_id == 1){
            return true;
        }
        return false;
    }

    public function is_member(){
        if($this->role_id == 2){
            return true;
        }
        return false;
    }

    public function is_poster(){
        if($this->role_id == 3){
            return true;
        }
        return false;
    }
    public function is_blocked(){
        return $this->is_block == 1 ? true : false;
    }

    public function getListUser(){
        $setting = Setting::getSetting();
        return self::where('is_delete', 0)->paginate($setting->p_user);
    }

    public function createUser(){
        $this->full_name = 'administrator';
        $this->gender = 1;
        $this->email = 'admin@cheerfarm.com';
        $this->password = Hash::make(123456);
        $this->role_id = 2;
        $this->is_block = 0;
        $this->is_delete = 0;
        $this->count_login = 0;
        if($this->save()){
            return true;
        }
        return false;
    }

    public function getUserById($id){
        return $this->find($id);
    }

    public function updateUser($request, $user, $is_member_update = true){
        $user->full_name = $request->full_name;
        $user->gender = $request->gender;
        $user->birth_of_day = $request->birth_of_day;
        if ($is_member_update){
            $user->email = $request->email;
            $user->role_id = $request->role_id;
        }
        return $user->save();
    }

    public function UpdatePassword($password, $user){
        $user->password = Hash::make($password);
        return $user->save();
    }

    public function BlockUser($is_block, $user){
        $user->is_block = $is_block;
        return $user->save();
    }
}
