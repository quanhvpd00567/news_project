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
                session()->flash('save_success', "Create new user: $request->full_name successfully");
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
    public function edit($id){
        if (Auth::user()->is_admin()){
            $user = $this->model_user->getUserById($id);
            if (is_null($user)) {
                return $this->page_404();
            }
            $roles = $this->model_role->getList();
            $data = [
                'user' => $user,
                'roles' => $roles
            ];
            return view('admin.pages.users.edit', $data);
        }
        return $this->page_403();
    }

    public function update($id, Request $request){
        if (Auth::user()->is_admin()){
            $user = $this->model_user->getUserById($id);
            if (is_null($user)) {
                return $this->page_404();
            }
            if ($this->model_user->updateUser($request, $user)){
                session()->flash('update_success', "Update info for user: $user->full_name successfully");
                return redirect()->route('list_user');
            }
            return redirect()->route('get_edit_view_user', ['id' => $id]);
        }
        return $this->page_403();
    }
    public function reset_pass($id){
        if (Auth::user()->is_admin()){
            $user = $this->model_user->getUserById($id);
            if (is_null($user)) {
                return $this->page_404();
            }
            return view('admin.pages.users.reset_pass', compact('user'));
        }
        return $this->page_403();
    }
    public function update_pass($id, Request $request){
        if (Auth::user()->is_admin()){
            $user = $this->model_user->getUserById($id);
            if (is_null($user)) {
                return $this->page_404();
            }

            if ($this->model_user->UpdatePassword($request->password, $user)){
                session()->flash('update_success', "Update password for user: $user->full_name successfully");
                return redirect()->route('list_user');
            }
        }
        return $this->page_403();
    }

    public function block_user($id, Request $request){
        if (Auth::user()->is_admin()){
            $user = $this->model_user->getUserById($id);
            if (is_null($user)) {
                return $this->page_404();
            }
            if ($this->model_user->BlockUser($request->is_block, $user)){
                if ($request->is_block == 0){
                    session()->flash('update_success', "Block user: $user->full_name successfully");
                }else{
                    session()->flash('update_success', "Un-Block user: $user->full_name successfully");
                }
                return redirect()->route('list_user');
            }
        }
        return $this->page_403();
    }

    public function profile_user(){
        return view('admin.pages.users.profile');
    }
}
