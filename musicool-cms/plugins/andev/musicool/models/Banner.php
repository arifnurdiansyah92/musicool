<?php namespace Andev\Musicool\Models;

use Model;

/**
 * Model
 */
class Banner extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'andev_musicool_banner';
    protected $guarded = ['*'];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $attachOne = [
        'banner_image' => 'System\Models\File'
    ];
    public $appends = [
        "banner"
    ];
    public function getBannerAttribute(){
        return $this->banner_image->getPath();
    }
    public function getStatAttribute(){
        return $this->status ? "ACTIVE" : "ACHIVED";
    }
    public function beforeSave(){
        if($this->is_main){
            $banner = Banner::where('id','<>',$this->id)->get();
            foreach($banner as $item){
                $item->is_main = 0;
                $item->save();
            }
        }
    }
}
