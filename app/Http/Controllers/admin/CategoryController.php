<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\BaseController;
use App\Models\admin\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends BaseController
{
    protected $_modelCategory;

    public function __construct()
    {
        $this->_modelCategory = new Category();
    }

    public function listCategory()
    {
        $categories = $this->_modelCategory->getCategoryParent();
        $data = [
            'categories' => $categories
        ];
        return view('admin.pages.categories.index', $data);
    }

    public function newCategory()
    {
        $category = new Category();
        $data = [
            'category' => $category,
            'isPageCreate' => true
        ];
        return view('admin.pages.categories.new', $data);
    }

    public function createCategory(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'name_en' => 'required|max:255',
        ];

        $messages = [
            'required' => ':attribute không để trống',
            'max' => ':attribute không quá :max ký tự',
        ];

        $attributes = array(
            'name' => 'Danh mục',
            'name_en' => 'Danh mục (Tiếng anh)',
        );

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $isSave = $this->_modelCategory->createCategory($request->all());
        if ($isSave) {
            return redirect()->route('admin.category.list')->with('success', 'Thêm danh muc thành công');
        }
        return redirect()->route('admin.category.list')->with('error', 'Thêm danh muc thất bại');

    }

    public function editCategory($id)
    {
        $category = $this->_modelCategory->getMenu($id);
        $data = [
            'category' => $category,
        ];
        return view('admin.pages.categories.edit', $data);
    }

    public function updateCategory($id, Request $request)
    {
        $category = $this->_modelCategory->getMenu($id);
        if (is_null($category)) {
            return abort(404);
        }

        $rules = [
            'name' => 'required|max:255',
            'name_en' => 'required|max:255',
        ];

        $messages = [
            'required' => ':attribute không để trống',
            'max' => ':attribute không quá :max ký tự',
        ];

        $attributes = array(
            'name' => 'Tên menu',
            'name_en' => 'Tên menu (Tiếng anh) ',
        );

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $isSave = $this->_modelCategory->updateCategory($request->all(), $category);

        if ($isSave) {
            return redirect()->route('admin.category.list')->with('success', 'Cập nhật danh mục thành công');
        }
        return redirect()->route('admin.category.list')->with('error', 'Cập nhật danh mục thất bại');
    }

    public function deleteCategory($id)
    {
        $isDelete = $this->_modelCategory->deleteMenu($id);
        if ($isDelete) {
            return redirect()->route('admin.category.list')->with('success', 'Xóa danh mục thành công');
        }
        return redirect()->route('admin.category.list')->with('error', 'Xóa danh mục thất bại');
    }

    public function restoreCategory($id)
    {
        $isRestore = $this->_modelCategory->restoreMenu($id);
        if ($isRestore) {
            return redirect()->route('admin.category.list')->with('success', 'Khôi phục danh mục thành công');
        }
        return redirect()->route('admin.category.list')->with('error', 'Khôi phục danh mục thất bại');
    }


    // Menu
    public function listMenu()
    {
        $data = [
            'menus' => $this->_modelCategory->getCategoryParent()
        ];
        return view('admin.pages.menu.index', $data);
    }

    public function newMenu()
    {
        $data = [
            'isPageCreate' => true,
            'menu' => new Setting()
        ];
        return view('admin.pages.menu.new', $data);
    }

    public function createMenu(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'name_en' => 'required|max:255',
        ];

        $messages = [
            'required' => ':attribute không để trống',
            'max' => ':attribute không quá :max ký tự',
        ];

        $attributes = array(
            'name' => 'Tên menu',
            'name_en' => 'Tên menu (Tiếng anh) ',
        );

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $isSave = $this->_modelCategory->createMenu($request->all());
        if ($isSave) {
            return redirect()->route('admin.menu.list')->with('success', 'Thêm menu thành công');
        }
        return redirect()->route('admin.menu.list')->with('error', 'Thêm menu thất bại');
    }

    public function editMenu($id)
    {
        $data = [
            'menu' => $this->_modelCategory->getMenu($id)
        ];
        return view('admin.pages.menu.edit', $data);
    }

    public function updateMenu($id, Request $request)
    {

        $menu = $this->_modelCategory->getMenu($id);
        if (is_null($menu)) {
            return abort(404);
        }

        $rules = [
            'name' => 'required|max:255',
            'name_en' => 'required|max:255',
        ];

        $messages = [
            'required' => ':attribute không để trống',
            'max' => ':attribute không quá :max ký tự',
        ];

        $attributes = array(
            'name' => 'Tên menu',
            'name_en' => 'Tên menu (Tiếng anh) ',
        );

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $isSave = $this->_modelCategory->updateMenu($request->all(), $menu);

        if ($isSave) {
            return redirect()->route('admin.menu.list')->with('success', 'Cập nhật menu thành công');
        }
        return redirect()->route('admin.menu.list')->with('error', 'Cập nhật menu thất bại');
    }

    public function deleteMenu($id)
    {
        $isDelete = $this->_modelCategory->deleteMenu($id);
        if ($isDelete) {
            return redirect()->route('admin.menu.list')->with('success', 'Xóa menu thành công');
        }
        return redirect()->route('admin.menu.list')->with('error', 'Xóa menu thất bại');
    }

    public function restoreMenu($id)
    {
        $isRestore = $this->_modelCategory->restoreMenu($id);
        if ($isRestore) {
            return redirect()->route('admin.menu.list')->with('success', 'Khôi phục menu thành công');
        }
        return redirect()->route('admin.menu.list')->with('error', 'Khôi phục menu thất bại');
    }
}
