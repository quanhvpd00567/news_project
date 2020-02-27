<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\Setting;

class BaseController extends Controller
{
    protected $settings;
    public function __construct()
    {
        $settings = Setting::first();
        \View::composer('end_user.layout.partials._footer', function($view) use($settings) {
            $view->with('settings', $settings);
        });
        \View::composer('end_user.layout.partials._buttons', function($view) use($settings) {
            $view->with('settings', $settings);
        });
    }

    public function getFooter() {
        return Setting::all();
    }


    public function page_404(){
        $data = [
            'code' => 404,
            'message' => trans('view.messages.errors.404')
        ];
        return view('end_user.errors.index', $data);
    }

    public function page_500(){
        $error = [
            'code' => 500,
            'message' => 'Error server, Please check connect internet'
        ];
        return view('admin.pages.errors.index', compact('error'));
    }

}
