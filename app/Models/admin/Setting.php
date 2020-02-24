<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Setting extends \App\Models\Setting
{
    public function updateSetting($params){
        $settings = self::first();

        if (is_null($settings)){
            return self::create($params);
        }else{
            return $settings->update($params);
        }
    }
}
