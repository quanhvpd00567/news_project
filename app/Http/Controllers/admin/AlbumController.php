<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Album;
use App\Models\admin\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
class AlbumController extends Controller
{
    protected $_modelProduct;
    protected $_modelAlbum;
    public function __construct()
    {
        $this->_modelProduct = new Product();
        $this->_modelAlbum = new Album();
    }

    public function newAlbum($id)
    {
        $product = $this->_modelProduct->getProductById($id);
        if (is_null($product)) {
            return abort(404);
        }

        $images = $this->_modelAlbum->getListImageByProductId($id, \Config::get('constant.types.product'));

        if (is_null($images)){
            $images = new Album();
        }
        $arg = $images->toArray();

        $data = [
            'product' => $product,
            'isPageCreate' => true,
            'images' => $arg
        ];

        return view('admin.pages.albums.new', $data);
    }

    public function createAlbum($id, Request $request){

        $product = $this->_modelProduct->getProductById($id);
        if (is_null($product)) {
            return abort(404);
        }
        $imagesInput = $request['albums'];

        $argInsert = array_merge($imagesInput, [
            'product_id' => $id,
            'type' => \Config::get('constant.types.product'),
            'status' => \Config::get('constant.status.isShow'),
        ]);
        $isSave = $this->_modelAlbum->createAlbum($argInsert, $id, \Config::get('constant.types.product'));
        if ($isSave){
            return redirect()->back()->with('success', "Cập nhật hình ảnh cho : '{$product->name}' thành công");
        }
        return redirect()->back()->with('error', "Cập nhật hình ảnh cho : '{$product->name}' thất bại");
    }
}
