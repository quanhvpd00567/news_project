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
//        dd($setting);
        return self::where('is_delete', 0)->paginate($setting->p_user);
    }

    public function createUser($request){
        $this->full_name = $request->post('full_name');
        $this->gender = $request->post('gender');
        // Format date input
        $this->birth_of_day = date('Y-m-d', strtotime($request->post('birth_of_day')));
        $this->email = $request->post('email');
        $this->password = Hash::make($request->post('password'));
        $this->role_id = $request->post('role_id');
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

    public function updateUser($request, $user){
        $user->full_name = $request->full_name;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->birth_of_day = $request->birth_of_day;
        $user->role_id = $request->role_id;
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
