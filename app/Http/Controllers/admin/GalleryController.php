<?php

namespace App\Http\Controllers\admin;

use App\Models\Album;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends AdminController
{
    public function new(){
        $images = Album::where('type', \Config::get('constant.types.gallery'))->first();
        if (is_null($images)){
            $images = new Album();
        }
        $images = $images->toArray();

        $data = [
            'images' =>$images
        ];
        return view('admin.pages.gallery.new', $data);
    }

    public function create(Request $request){
        try {
            $images = Album::where('type', \Config::get('constant.types.gallery'))->first();
            if (is_null($images)){
                $images = new Album();
            }
            $images->image_1 = $request['albums']['image_1'];
            $images->image_2 = $request['albums']['image_2'];
            $images->image_3 = $request['albums']['image_3'];
            $images->image_4 = $request['albums']['image_4'];
            $images->image_5 = $request['albums']['image_5'];
            $images->image_6 = $request['albums']['image_6'];
            $images->image_7 = $request['albums']['image_7'];
            $images->image_8 = $request['albums']['image_8'];
            $images->image_9 = $request['albums']['image_9'];
            $images->image_10 = $request['albums']['image_10'];
            $images->type = \Config::get('constant.types.gallery');
            $images->product_id = null;
            $images->created_at = Carbon::now();
            $images->updated_at = Carbon::now();
            if ($images->save()){
                return redirect()->route('admin.gallery.new')->with('success', 'Thêm gallery thành công');
            }
            return redirect()->route('admin.gallery.new')->with('error', 'Thêm gallery thất bại');

        }catch (\Exception $exception){
            return redirect()->route('admin.gallery.new')->with('error', 'Thêm gallery thất bại');
        }
    }
}
