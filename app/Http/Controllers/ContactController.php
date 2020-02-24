<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends BaseController
{
    protected $modelSetting;
    public function __construct()
    {
        parent::__construct();
        $this->modelSetting = new Setting();
    }

    public function index(){
        $data = [
            'settingsContact' => $this->modelSetting->getSetting(['email', 'name', 'tel', 'fax', 'hotline'])
        ];
        return view('end_user.contact.index', $data);
    }

}
