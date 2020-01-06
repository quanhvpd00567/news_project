<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Album;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
class ImageController extends BaseController
{
    private $model_image;
    private $model_album;
    public function __construct()
    {
        $this->model_image = new Image();
        $this->model_album = new Album();
    }
    public function index(){
        $lists = $this->model_image->getList();
        return view('admin.pages.images.index', compact('lists'));
    }
    public function create_new(){
        $listAlbum = $this->model_album->getList();
        return view('admin.pages.images.new', compact('listAlbum'));
    }
    public function create(Request $request){
        $uploadedFile = $request->file('url');
        $filename = time().$uploadedFile->getClientOriginalName();
        $path = Storage::disk('my_files')->putFileAs(
            null,
            $uploadedFile,
            $filename
        );
        if($this->model_image->createImage($request->album_id, $path)){
            return redirect()->route('list_image');
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
