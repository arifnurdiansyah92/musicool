<?php 
use Andev\Musicool\Models\Email;use Andev\Musicool\Models\Phone;class Cms5d7e3b13d68ef138061397_642957ea707a34df7a4121ffa4f36470Class extends Cms\Classes\PartialCode
{


public function onStart() {
    $email = Email::where('is_main',1)->first();
    $this['email'] = $email;
    $phone = Phone::where('is_main',1)->first();
    $this['phone'] = $phone;
}
}
