<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
