<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends BaseController
{
    private $model_user;
    private $model_role;
    public function __construct()
    {
        $this->model_user = new User();
        $this->model_role = new Role();
    }
    public function create_new(){
        if (Auth::user()->is_admin()){
            $roles = $this->model_role->getList();
            return view('admin.pages.users.new', compact('roles'));
        }
       return $this->page_403();

    }
    public function create(Request $request){
        if (Auth::user()->is_admin()){
            $result = $this->model_user->createUser($request);
            if($result){
                return redirect()->route('list_user');
            }
            return redirect()->route('get_new_view_user');
        }
        return $this->page_403();

    }

    public function index(){
        if (Auth::user()->is_admin()){
            $users = $this->model_user->getListUser();
            return view('admin.pages.users.index', compact('users'));
        }
        return $this->page_403();
    }
}
