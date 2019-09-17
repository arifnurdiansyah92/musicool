<?php namespace Andev\Musicool\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Subscriber extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Andev.Musicool', 'Musicool', 'Subscriber');
    }
}
