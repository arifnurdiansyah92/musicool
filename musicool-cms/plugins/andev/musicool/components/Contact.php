<?php
namespace Andev\Musicool\Components;
use Andev\Musicool\Models\Location as Location;
use Andev\Musicool\Models\Email as Email;
use Andev\Musicool\Models\Phone as Phone;

class Contact extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contact List',
            'description' => 'Menampilkan Data Kontak.'
        ];
    }

    public function locations()
    {
       return Location::get();
    }
    public function emails(){
        return Email::get();
    }
    public function phones(){
        return Phone::get();
    }
}