<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Category;
use App\Models\admin\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\VarDumper\Cloner\Data;

class ProductController extends Controller
{
    protected $_modelProduct;
    protected $_modelCategory;

    public function __construct()
    {

        $this->_modelProduct = new Product();
        $this->_modelCategory = new Category();
    }

    public function listProduct()
    {
        $data = [
            'products' => $this->_modelProduct->getProducts()
        ];
        return view('admin.pages.products.index', $data);
    }

    public function newProduct()
    {
        $data = [
            'product' => new Product(),
            'categories' => $this->_modelCategory->getCategoryParent()->pluck('name', 'id'),
            'isPageCreate' => true
        ];
        return view('admin.pages.products.new', $data);
    }

    public function createProduct(Request $request)
    {
        $validator = $this->checkValidate($request);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.product.new')
                ->withErrors($validator)
                ->withInput();
        }
        $isSave = $this->_modelProduct->createProduct($request);
        if ($isSave) {
            return redirect()->route('admin.product.list')->with('success', 'Thêm sản phẩm thành công');
        }
        return redirect()->route('admin.product.list')->with('error', 'Thêm sản phẩm thất bại');
    }

    public function editProduct($id){
        $product = $this->_modelProduct->getProductById($id);
        if (is_null($product)){
            return abort(400);
        }

        $data = [
            'product' => $product,
            'categories' => $this->_modelCategory->getCategoryParent()->pluck('name', 'id'),
        ];
        return view('admin.pages.products.edit', $data);
    }

    public function updateProduct($id, Request $request){
        $product = $this->_modelProduct->getProductById($id);
        if (is_null($product)){
            return abort(400);
        }

        $validator = $this->checkValidate($request);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.product.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $isSave = $this->_modelProduct->updateProduct($request, $product);

        if ($isSave) {
            return redirect()->route('admin.product.list')->with('success', 'Cập nhật sản phẩm thành công');
        }
        return redirect()->route('admin.product.list')->with('error', 'Cập nhật sản phẩm thất bại');

    }

    public function showFinder(Request $request)
    {
        //        if ($request['langCode'] == 'vi')
        //        {
        //            return 111;
        //        }
        return view('admin.ckfinder.index');
    }

    private function checkValidate($request)
    {
        $rules = [
            'name' => 'required|max:50',
            'name_en' => 'required|max:50',
            'image_1' => 'required',
            'image_2' => 'required',
        ];

        $messages = [
            'required' => ':attribute không để trống',
            'max' => ':attribute không quá :max ký tự',
            'image' => ':attribute không đúng định dạng',
            'mimes' => ':attribute phải có đuôi là :mimes',
        ];

        $attributes = [
            'name' => 'Tên sản phẩm',
            'name_en' => 'Tên sản phẩm bằng',
            'image_1' => 'Hình ảnh bên ngoài',
            'image_2' => 'Hình ảnh bên trong',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        return $validator;
    }

    private function checkImage($file, $supported_image = ['gif', 'jpg', 'jpeg', 'png'], $maxSize = 2097152)
    {
        $extensiton = $file->getClientOriginalExtension();
        $fileSize = $file->getSize();
        $case = [];
        if (!in_array($extensiton, $supported_image)) {
            $case = [
                'message' => 'không đúng định dạng ảnh phải là (' . implode($supported_image, ', ') . ')'
            ];
            return $case;
        }
        if ($fileSize > $maxSize) {
            $sizeCustom = number_format($maxSize / (1 << 20), 2) . "MB";
            $case = [
                'message' => 'không quá ' . $sizeCustom
            ];
            return $case;
        }
        return $case;
    }


    public function testSend(){

    }
}
