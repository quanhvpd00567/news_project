<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    public $timestamps = true;

    public function user(){
        return $this->hasMany('app\Models\user', 'role_id', 'id');
    }

    public function createRole($request){
        $this->role_name = $request->post('role_name');
        if($this->save()) {
            return true;
        }else{
            return false;
        }
    }

    public function getRoleById($id){
        return $this->find($id);
    }

    public function updateRole($request, $role){
        $role->role_name = $request->post('role_name');
        $role->updated_at = Carbon::now();
        if($role->save()) {
            return true;
        }else{
            return false;
        }
    }

    public function getList(){
        return $this->all();
//        return $this->get(['role_name', 'id']);
    }
}
