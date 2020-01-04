<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\Setting;

class BaseController extends Controller
{
    public $model_setting;
    public function __construct()
    {
        global $setting;
        $this->model_setting = new Setting();
        $setting = $this->model_setting->getSetting();

        if(is_null($this->setting)){
            $this->model_setting->create();
            $setting = $this->model_setting->getSetting();
        }
    }

    public function page_403(){
        $error = [
            'code' => 403,
            'message' => 'Your not permission'
        ];
        return view('admin.pages.errors.index', compact('error'));
    }

    public function page_404(){
        $error = [
            'code' => 404,
            'message' => 'Not found'
        ];
        return view('admin.pages.errors.index', compact('error'));
    }

    public function page_500(){
        $error = [
            'code' => 500,
            'message' => 'Error server, Please check connect internet'
        ];
        return view('admin.pages.errors.index', compact('error'));
    }

}
