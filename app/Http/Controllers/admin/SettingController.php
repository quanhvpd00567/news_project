<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\SettingRequest;
use App\Models\admin\Banner;
use App\Models\admin\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Config;

class SettingController extends AdminController
{
    protected $_modelSetting;

    public function __construct()
    {
        $this->_modelSetting = new Setting();
    }

    public function index()
    {
        $colmns = [
            'office_branch',
            'office_branch_en',
            'factory',
            'factory_en',
            'warehouse',
            'warehouse_en',
        ];

        $data = [
            'setting' => $this->_modelSetting->getSetting($colmns)
        ];

        return view('admin.pages.setting.index', $data);
    }

    public function website()
    {
        $colmns = [
            'name',
            'email',
            'tel',
            'hotline',
            'fax',
            'copyright',
            'facebook',
            'youtube',
            'instagram',
            'background_img',
        ];
        $data = [
            'setting' => $this->_modelSetting->getSetting($colmns)
        ];
        return view('admin.pages.setting.website', $data);
    }

    public function settingMail()
    {
        $colmns = [
            'mail_driver',
            'mail_host',
            'mail_port',
            'mail_username',
            'mail_password',
            'mail_encryption',
        ];
        $data = [
            'setting' => $this->_modelSetting->getSetting($colmns)
        ];
        return view('admin.pages.setting.mail', $data);
    }

    public function updateSetting(Request $request)
    {
        if ((int)$request['mode_setting'] == Config::get('constant.settings.mode.website')) {

            $cols = ['name', 'email', 'tel', 'fax', 'hotline', 'facebook', 'youtube', 'instagram', 'copyright', 'background_img'];

            $rules = [
                'name' => 'required|max:50',
                'email' => 'required|email',
                'tel' => 'required:max:20',
                'hotline' => 'required:max:20',
                'fax' => 'required:max:20',
            ];

            $messages = [
                'required' => ':attribute không để trống',
                'max' => ':attribute không quá :max ký tự',
                'email' => ':attribute không đúng định dạng',
            ];

            $attributes = array(
                'name' => 'Tên website',
                'email' => 'Email',
                'tel' => 'Tel',
                'hotline' => 'Hotline',
                'fax' => 'Fax'
            );
        } elseif ((int)$request['mode_setting'] == Config::get('constant.settings.mode.mail')) {

            $cols = ['mail_driver', 'mail_host', 'mail_port', 'mail_username', 'mail_password', 'mail_encryption'];

            $rules = [
                'mail_driver' => 'required|max:5',
                'mail_host' => 'required|max:100',
                'mail_port' => 'required|max:10',
                'mail_username' => 'required|max:255',
                'mail_password' => 'required|max:255',
                'mail_encryption' => 'required|max:5',
            ];

            $messages = [
                'required' => ':attribute không để trống',
                'max' => ':attribute không quá :max ký tự',
            ];

            $attributes = array(
                'mail_driver' => 'MAIL DRIVER',
                'mail_host' => 'MAIL HOT',
                'mail_port' => 'MAIL PORT',
                'mail_username' => 'MAIL USERNAME',
                'mail_password' => 'MAIL PASSWORD',
                'mail_encryption' => 'MAIL ENCRYPTION',
            );


        } else {
            $cols = ['office_branch', 'office_branch_en', 'factory', 'factory_en', 'warehouse', 'warehouse_en'];

            $rules = [
                'office_branch' => 'required|max:255',
                'office_branch_en' => 'required|max:255',
                'factory' => 'required|max:255',
                'factory_en' => 'required|max:255',
                'warehouse' => 'required|max:255',
                'warehouse_en' => 'required|max:255',
            ];

            $messages = [
                'required' => ':attribute không để trống',
                'max' => ':attribute không quá :max ký tự',
            ];

            $attributes = array(
                'office_branch' => 'Địa chỉ văn phòng',
                'office_branch_en' => 'Địa chỉ văn phòng (Tiếng anh)',
                'factory' => 'Địa chỉ nhà máy',
                'factory_en' => 'Địa chỉ nhà máy (Tiếng anh)',
                'warehouse' => 'Địa chỉ kho',
                'warehouse_en' => 'Địa chỉ kho (Tiếng anh)'
            );
        }

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $params = $this->getParams($request->all(), $cols);

        $isSaveSetting = $this->_modelSetting->updateSetting($params);

        if ($isSaveSetting) {
            return redirect()->back()->with('success', 'Cập nhật thành công');
        }
    }

    public function bannerSetting()
    {
        $arrayScreen = [
            'screen_home' => 'Banner cho trang chủ',
            'screen_product' => 'Banner cho trang sản phẩm',
//            'screen_about_us' => 'Banner cho trang giới thiệu',
            'screen_gallery' => 'Banner cho trang bộ sưu tập',
            'screen_manufacturer' => 'Banner cho trang sản xuất',
            'screen_contact' => 'Banner cho trang liên hệ',
        ];
        $banners = Banner::select('url', 'type', 'status')->get()->toArray();
        $bannersNew = [];
        foreach ($banners as $item){
            $bannersNew[$item['type']] = $item;
        }
        $data = [
            'screens' => $arrayScreen,
            'banners' => $bannersNew,
        ];
        return view('admin.pages.setting.banner', $data);
    }

    public function updateBannerSetting(Request $request)
    {
        try {
            DB::beginTransaction();
            $arrayScreen = [
                'screen_home' => 0,
                'screen_product' => 1,
//                'screen_about_us' => 2,
                'screen_gallery' => 3,
                'screen_manufacturer' => 4,
                'screen_contact' => 5
            ];

            $argKey = array_keys($arrayScreen);
            $dataSave = [];

            foreach ($argKey as $key) {
                $url = $request[$key];
                $checked = $request["check_$key"];
                if (!is_null($key) && !empty($url)) {
                    $row = [
                        'url' => $url,
                        'type' => $key,
                        'status' => is_null($checked) ? Config::get('constant.status.isNotShow') : Config::get('constant.status.isShow'),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ];
                    array_push($dataSave, $row);
                }
            }
            Banner::truncate();
            Banner::insert($dataSave);
            DB::commit();
            return redirect()->route('admin.setting.banner')->with('success', 'Cập nhât thành công');
        }catch (\Exception $exception){
            DB::rollBack();
            return redirect()->route('admin.setting.banner')->with('error', 'Cập nhât thất bại');
        }

    }

    private function getParams($request, $cols = [])
    {
        $params = [];
        if (count($cols) > 0) {
            foreach ($request as $key => $value) {
                if (in_array($key, $cols)) {
                    $params[$key] = $value;
                }
            }
        }
        return $params;
    }
}
