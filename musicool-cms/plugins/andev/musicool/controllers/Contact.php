<?php namespace Andev\Musicool\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Illuminate\Http\Request;
use Mail;
use Validator;
use Session;
use Andev\Musicool\Models\EmailSetting as Setting; 

class Contact extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Andev.Musicool', 'Musicool','Social-Media');

    }

    public function contact(Request $req){
        $validate = Validator::make($req->all(), [
            "name" => "required",
            "email" => "required|email",
            "subject" => "required",
            "message" => "required"
        ]);
        $setting = Setting::First();
        config(['mail.username' => $setting->sender_email]);
        config(['mail.password' => $setting->sender_password]);
        config(['mail.from' => ['address' => $setting->sender_email, 'name' => 'Musicool']]);
        if($validate->fails()){
            return response()->json(["status" => 400, "data" => $validate->errors()],400);
        }
        Mail::send(['raw' => 'Terimakasih sudah mengirimi kami email!, kami akan membalas secepatnya!'], $req->all(), function($message) use ($req) {

            $message->to($req->email, $req->name);
            $message->subject($req->subject);
        
        });
        Mail::send(['raw' => $req->message], $req->all(), function($message) use ($req,$setting) {
            $message->to($setting->forward_to);
            $message->subject('Musicool Forwarder - '.$req->subject);
        });
        return response()->json(["status" => 200, "data" => "Success"],200);
    }
}
