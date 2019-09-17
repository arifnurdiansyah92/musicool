<?php namespace Andev\GoogleMapsPicker\FormWidgets;

use Html;
use Backend\Classes\FormWidgetBase;

use Andev\GoogleMapsPicker\Models\Settings;

class GoogleMapsPicker extends FormWidgetBase
{
    private $apiKey;
    private $latitude;
    private $longitude;

    protected $fieldPosition;

    public $defaultAlias = 'googlemapspicker';


    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['field'] = $this->formField;
    }

    public function render()
    {
        $this->prepareVars();

        return $this->makePartial('googlemapspicker');
    }

    public function getFieldMapAttributes()
    {
        $result = [];

        return Html::attributes($result);
    }

    public function getFieldPositionAttributes()
    {
        $result = [];

        return Html::attributes($result);
    }

    public function loadAssets()
    {
        $this->_setFromSettings();
        $this->addJs('//maps.googleapis.com/maps/api/js?key=' . $this->apiKey . '&libraries=places');
        $this->addJs('js/main.js', 'core');
    }

    private function _setFromSettings()
    {
        $settingsInstance = Settings::instance();

        if(isset($settingsInstance->attributes['address_map_key'])){
          $this->apiKey = $settingsInstance->attributes['address_map_key'] ?? '';
        }
    }
}
