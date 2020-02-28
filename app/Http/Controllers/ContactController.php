<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Setting;
use GuzzleHttp\Psr7\Request;

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

    public function send(ContactRequest $request){
        try {
            $contact = new Contact();
            $contact->full_name = $request['full_name'];
            $contact->address = $request['address'];
            $contact->title = $request['title'];
            $contact->company = $request['company'];
            $contact->content = $request['content'];
            $contact->status = \Config::get('constant.status.pending');
            if($contact->save()){
                $user = 'Admin cheerfarm';
                \Mail::send('mails.index', ['contact' => $contact, 'user' => $user], function($message) use ($contact, $user)
                {
                    $message->to('quanhv1994@gmail.com', $user)->subject($contact->title);
                });
            };
            return redirect()->route('contact')->with('success', trans('view.contact.Form.labels.tks'));
        }catch (\Exception $exception){
            return redirect()->route('contact')->with('error', trans('view.contact.Form.labels.error'));
        }
    }

}
