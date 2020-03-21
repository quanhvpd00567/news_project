<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\IntroductRequest;
use App\Http\Requests\ManufacturerRequest;
use App\Models\admin\Album;
use App\Models\admin\Introduce;
use App\Models\admin\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IntroduceController extends Controller
{
    protected $_modelIntroduce;
    protected $_modelAlbum;

    public function __construct()
    {
        $this->_modelIntroduce = new Introduce();
        $this->_modelAlbum = new Album();
    }

    public function listIntroduce(){
        $data = [
            'introduces' => $this->_modelIntroduce->getListIntroduces()
        ];
        return view('admin.pages.introduces.index', $data);
    }

    public function newIntroduce()
    {
        $data = [
            'introduce' => new Introduce(),
            'isPageCreate' => true
        ];
        return view('admin.pages.introduces.new', $data);
    }

    public function createIntroduce(IntroductRequest $request)
    {
        $isSave = $this->_modelIntroduce->createIntroduce($request->all());
        if ($isSave){
            return redirect()->route('admin.introduce.list')->with('success', 'Thêm thành công');
        }
        return redirect()->route('admin.introduce.list')->with('error', 'Thêm thất bại');
    }

    public function editIntroduce($id){
        $introduce = $this->_modelIntroduce->getIntroduceById($id);
        if (is_null($introduce)){
            return abort(404);
        }
        $data = [
            'introduce' => $introduce
        ];
        return view('admin.pages.introduces.edit', $data);
    }

    public function updateIntroduce($id, IntroductRequest $request)
    {
        $introduce = $this->_modelIntroduce->getIntroduceById($id);
        if (is_null($introduce)){
            return abort(404);
        }

        $isSave = $this->_modelIntroduce->updateIntroduce($request->all(), $introduce);
        if ($isSave){
            return redirect()->route('admin.introduce.list')->with('success', 'Chỉnh sửa thành công');
        }
        return redirect()->route('admin.introduce.list')->with('error', 'Chỉnh sửa thất bại');
    }

    public function deleteIntroduce($id){
        $introduce = $this->_modelIntroduce->getIntroduceById($id);
        if (is_null($introduce)){
            return abort(404);
        }

        $isDelete = $this->_modelIntroduce->deleteIntroduct($introduce);
        if ($isDelete){
            return redirect()->route('admin.introduce.list')->with('success', "Xóa {$introduce->name} thành công");
        }
        return redirect()->route('admin.introduce.list')->with('error', "Xóa {$introduce->name} thất bại");
    }

    public function newListImageIntroduce($id){
        $introduce = $this->_modelIntroduce->getIntroduceById($id);
        if (is_null($introduce)){
            return abort(404);
        }

        $images = $this->_modelAlbum->getListImageByProductId($id, \Config::get('constant.types.introduce'));

        if (is_null($images)){
            $images = new Album();
        }
        $arg = $images->toArray();

        $data = [
            'product' => $introduce,
            'isPageCreate' => true,
            'images' => $arg
        ];

        return view('admin.pages.introduces.image', $data);
    }

    public function createListImageIntroduce($id, Request $request){
        $introduce = $this->_modelIntroduce->getIntroduceById($id);
        if (is_null($introduce)) {
            return abort(404);
        }

        $images = $request['albums'];
        $argInsert = array_merge($images, [
            'product_id' => $id,
            'type' => \Config::get('constant.types.introduce'),
            'status' => \Config::get('constant.status.isShow'),
        ]);
        $isSave = $this->_modelAlbum->createAlbum($argInsert, $id, \Config::get('constant.types.introduce'));
        if ($isSave){
            return redirect()->route('admin.introduce.image', [$id])->with('success', "Cập nhật hình ảnh cho : '{$introduce->name}' thành công");
        }
        return redirect()->route('admin.introduce.image', [$id])->with('error', "Cập nhật hình ảnh cho : '{$introduce->name}' thất bại");
    }


}
