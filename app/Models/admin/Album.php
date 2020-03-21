<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class Album extends \App\Models\Album
{
    protected $fillable = [
        'product_id',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'image_6',
        'image_7',
        'image_8',
        'image_9',
        'image_10',
        'status',
        'type',
    ];
    public function createAlbum($data, $id, $type){
        DB::beginTransaction();
        try {
            $album = $this->getListImageByProductId($id, $type);
            if (is_null($album)){
                $data = array_merge($data, [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                self::insert($data);
            }else{
                $data = array_merge($data, [
                    'updated_at' => Carbon::now(),
                ]);
                $album->update($data);
            }
            DB::commit();
            return true;
        }catch (\Exception $e){
            DB::rollBack();
            return false;
        }
    }

    public function getListImageByProductId($id, $type){
        return self::where('type', $type)->where('product_id', $id)->first();
    }
}
