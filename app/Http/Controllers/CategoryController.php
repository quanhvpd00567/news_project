<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $model_category;
    public function __construct()
    {
        $this->model_category = new Category();
    }

    public function index(){
        $lists = $this->model_category->getList(0);
        return view('admin.pages.categories.index', compact('lists'));
    }

    public function create_new(){
        return view('admin.pages.categories.new');
    }
    public function create(Request $request){
        $category = $this->model_category->createCategory($request);
        if($category){
            return redirect()->route('list_category');
        }
        return redirect()->route('get_new_view_categories');
    }
    public function edit($id){
        $category = $this->model_category->getCategoryById($id);
        if($category == null){
            return abort(404);
        }
        return view('admin.pages.categories.edit', compact('category'));
    }

    public function update($id, Request $request){
        $category = $this->model_category->getCategoryById($id);
        if($category == null){
            return abort(404);
        }

        $result = $this->model_category->updateCategory($request, $category);
        if ($result){
            return redirect()->route('list_category');
        }
        return redirect()->route('get_view_edit_category', ['id', $id]);
    }

    public function delete($id){
     $result = $this->model_category->deleteCategory($id);
     if ($result){
         session()->flash('save_success','Xoa thanh cong');
         return redirect()->route('list_category');
     }else{
         session()->flash('save_error','Xoa khong thanh cong');
         return redirect()->route('list_category');
     }
    }
}
