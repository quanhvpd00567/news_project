<?php

namespace App\Http\Controllers\admin;

use App\Models\Album;
use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GalleryController extends AdminController
{
    public function new(){
        $images = Gallery::all();

        $data = [
            'images' =>$images
        ];
        return view('admin.pages.gallery.new', $data);
    }

    public function create(Request $request){
        try {
            DB::beginTransaction();
            $images = Gallery::all();
            if (count($images) > 0){
                Gallery::truncate();
            }

            $dataInsert = [];
            if (isset($request['gallery'])){
                foreach ($request['gallery'] as $item){
                    if (!empty($item) || !is_null($item)){
                        array_push($dataInsert, ['url' => $item]);
                    }
                }
            }
            Gallery::insert($dataInsert);
            DB::commit();
            return redirect()->route('admin.gallery.new')->with('success', 'Thêm gallery thành công');
        }catch (\Exception $exception){
            dd($exception);
            DB::rollBack();
            return redirect()->route('admin.gallery.new')->with('error', 'Thêm gallery thất bại');
        }
    }
}
