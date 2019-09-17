<?php namespace Andev\Musicool;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Andev\Musicool\Components\Contact'       => 'contact',
        ];
    }

    public function registerSettings()
    {
    }
}
