<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends BaseController
{
    private $model_album;
    public function __construct()
    {
        $this->model_album = new Album();
    }
    public function create_new(){
        return view('admin.pages.albums.new');
    }
    public function create(Request $request){
        $result = $this->model_album->createAlbum($request);
        if($result){
            return redirect()->route('list_album');
        }
        return redirect()->route('admin.pages.albums.new');

    }
    public function edit($id){
        $album = $this->model_album->getAlbumById($id);
        if($album == null){
            return abort(404);
        }
        return view('admin.pages.albums.edit', compact('album'));
    }
    public function update($id, Request $request){
        $album = $this->model_album->getAlbumById($id);
        if($album == null){
            return abort(404);
        }
        $result = $this->model_album->updateAlbum($request, $album);
        if($result){
            return redirect()->route('list_album');
        }
        return redirect()->route('get_view_edit_album', ['id',$id]);
    }
    public function index(){
        $lists = $this->model_album->getList();
        return view('admin.pages.albums.index', compact('lists'));
    }
}
