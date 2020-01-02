<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $model_user;
    private $model_role;
    public function __construct()
    {
        $this->model_user = new User();
        $this->model_role = new Role();
    }
    public function create_new(){
        $roles = $this->model_role->getList();
        return view('admin.pages.users.new', compact('roles'));
    }
    public function create(Request $request){
        $result = $this->model_user->createUser($request);
        if($result){
            return redirect()->route('list_user');
        }
        return redirect()->route('get_new_view_user');
    }
    public function index(){

    }
}
