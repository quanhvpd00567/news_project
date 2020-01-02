<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
class RoleController extends Controller
{
    private $model_role;
    public function __construct(){
        $this->model_role = new Role();
    }

    public function index(){
        $lists = $this->model_role->getList();
        return view('admin.pages.role.index', compact('lists'));
    }

    public function create_new(){
        return view('admin.pages.role.new');
    }

    public function create(Request $request){

        $result = $this->model_role->createRole($request);
        if ($result){
            // Neu luu thanh cong thi se redirect to page list role
            return redirect()->route('list_role');
        }
        // Neu luu k thanh cong thi se redirect to page new role
        return redirect()->route('get_view_new_role');
    }

    public function edit($id){
        $role = $this->model_role->getRoleById($id);
        if($role == null){
            return abort(404);
        }
        return view('admin.pages.role.edit', compact('role'));
    }

    public function update($id, Request $request){
        $role = $this->model_role->getRoleById($id);
        if($role == null){
            return abort(404);
        }

        $result = $this->model_role->updateRole($request, $role);
        if ($result){
            // Neu luu udpate thanh cong thi se redirect to page list role
            return redirect()->route('list_role');
        }
        // Neu luu k thanh cong thi se redirect to page new role
        return redirect()->route('get_view_edit_role', ['id', $id]);
    }
}
