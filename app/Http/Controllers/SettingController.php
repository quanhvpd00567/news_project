<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    private $model_setting;
    function __construct()
    {
        $this->model_setting = new Setting();
    }

    public function index()
    {
        $setting = $this->model_setting->getSetting();

        return view('admin.pages.setting.index', compact('setting'));
    }
    public function update(Request $request)
    {
        $result = $this->model_setting->updateSetting($request);
        if ($result){
            session()->flash('key_update_success', 'Setting updated!');
        }else{
            session()->flash('key_update_fail', 'Setting update fail');
        }
        return redirect()->route('get_setting');
    }
}
