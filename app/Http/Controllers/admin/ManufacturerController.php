<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\ManufacturerRequest;
use App\Models\admin\Album;
use App\Models\admin\Manufacturer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManufacturerController extends Controller
{
    protected $_modelManufacturer;
    protected $_modelAlbum;

    public function __construct()
    {
        $this->_modelManufacturer = new Manufacturer();
        $this->_modelAlbum = new Album();
    }

    public function listManufacturer(){
        $data = [
            'manufacturers' => $this->_modelManufacturer->getListManufacturer()
        ];
        return view('admin.pages.manufacturers.index', $data);
    }

    public function newManufacturer()
    {
        $data = [
            'manufacturer' => new Manufacturer(),
            'isPageCreate' => true
        ];
        return view('admin.pages.manufacturers.new', $data);
    }

    public function createManufacturer(ManufacturerRequest $request)
    {
        $isSave = $this->_modelManufacturer->createManufacturer($request->all());
        if ($isSave){
            return redirect()->route('admin.manufacturer.list')->with('success', 'Thêm loại sản xuất thành công');
        }
        return redirect()->route('admin.manufacturer.list')->with('error', 'Thêm loại sản xuất thất bại');
    }

    public function editManufacturer($id){
        $manufacturer = $this->_modelManufacturer->getManufacturerById($id);
        if (is_null($manufacturer)){
            return abort(404);
        }
        $data = [
            'manufacturer' => $manufacturer
        ];
        return view('admin.pages.manufacturers.edit', $data);
    }

    public function updateManufacturer($id, ManufacturerRequest $request)
    {
        $manufacturer = $this->_modelManufacturer->getManufacturerById($id);
        if (is_null($manufacturer)){
            return abort(404);
        }

        $isSave = $this->_modelManufacturer->updateManufacturer($request->all(), $manufacturer);
        if ($isSave){
            return redirect()->route('admin.manufacturer.list')->with('success', 'Chỉnh sửa loại sản xuất thành công');
        }
        return redirect()->route('admin.manufacturer.list')->with('error', 'Chỉnh sửa loại sản xuất thất bại');
    }

    public function newListImageManufacturer($id){
        $manufacturer = $this->_modelManufacturer->getManufacturerById($id);
        if (is_null($manufacturer)){
            return abort(404);
        }

        $images = $this->_modelAlbum->getListImageByProductId($id, \Config::get('constant.types.manufacturer'));

        if (is_null($images)){
            $images = new Album();
        }
        $arg = $images->toArray();

        $data = [
            'product' => $manufacturer,
            'isPageCreate' => true,
            'images' => $arg
        ];

        return view('admin.pages.manufacturers.image', $data);
    }

    public function createListImageManufacturer($id, Request $request){
        $manufacturer = $this->_modelManufacturer->getManufacturerById($id);
        if (is_null($manufacturer)) {
            return abort(404);
        }
        $imagesInput = $request['albums'];

        $argInsert = array_merge($imagesInput, [
            'product_id' => $id,
            'type' => \Config::get('constant.types.manufacturer'),
            'status' => \Config::get('constant.status.isShow'),
        ]);
        $isSave = $this->_modelAlbum->createAlbum($argInsert, $id, \Config::get('constant.types.manufacturer'));
        if ($isSave){
            return redirect()->route('admin.manufacturer.image', [$id])->with('success', "Cập nhật hình ảnh cho : '{$manufacturer->name}' thành công");
        }
        return redirect()->route('admin.manufacturer.image', [$id])->with('error', "Cập nhật hình ảnh cho : '{$manufacturer->name}' thất bại");
    }

}
