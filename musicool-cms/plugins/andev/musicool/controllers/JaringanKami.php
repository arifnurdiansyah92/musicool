<?php namespace Andev\Musicool\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Request;
class JaringanKami extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        $this->addJs("/plugins/andev/musicool/assets/wilayah.js");
        $this->addJs("/plugins/andev/musicool/assets/tipe_layanan.js");
        BackendMenu::setContext('Andev.Musicool', 'Musicool','JaringanKami');

    }
}
