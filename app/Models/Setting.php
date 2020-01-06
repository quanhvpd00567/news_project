<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table ="settings";

    public static function getSetting(){
        return self::all()->first();
    }

    public function create(){
        $this->p_user = 10;
        $this->p_article = 10;
        $this->p_category = 10;
        $this->background_color = '#cccccc';
        $this->save();
        return $this->getSetting();
    }

    public function updateSetting($requests){
        $setting = $this->getSetting();
        if ($setting == null){
            $this->p_user = $requests->post('p_user');
            $this->p_article = $requests->post('p_article');
            $this->p_category = $requests->post('p_category');
            $this->background_color = $requests->post('background_color');
            return $this->save();
        }{
            $setting->p_user = $requests->post('p_user');
            $setting->p_article = $requests->post('p_article');
            $setting->p_category = $requests->post('p_category');
            $setting->p_category = $requests->post('p_category');
            $setting->background_color = $requests->post('background_color');
            return $setting->save();
        }
    }
}
