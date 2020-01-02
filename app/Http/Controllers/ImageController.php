<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
class ImageController extends Controller
{
    private $model_image;
    public function __construct()
    {
        $this->model_image = new Image();
    }
    public function index(){
        $lists = $this->model_image->getList();
        return view('admin.pages.images.index', compact('lists'));
    }
    public function create_new(){
        return view('admin.pages.images.new');
    }
    public function create(Request $request){
        $result = $this->model_image->createImage($request);
        if($result){
            return redirect()->route('list_image');
        }else{
            return redirect()->route('admin.pages.images.view');
        }
    }
    public function edit($id){
        $image = $this->model_image->getImageById($id);
        if($image == null){
            return abort(404);
        }
        else{
            return view('admin.pages.images.edit', compact('image'));
        }
    }
    public function update($id, Request $request){
        $image = $this->model_image->getImageById($id);
        if($image == null){
            return abort(404);
        }
        $result = $this->model_image->updateImage($image,$request);
        if($result){
            return redirect()->route('list_image');
        }
        return redirect()->route('get_edit_view_image', ['id', $id]);
    }
}
