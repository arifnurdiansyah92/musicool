<?php namespace Andev\Musicool\Models;

use Model;
use Andev\Musicool\Models\CategoryGallery;
/**
 * Model
 */
class Gallery extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'andev_musicool_gallery';

    /**
     * @var array Validation rules
     */
    public $attachOne = [
        'image' => 'System\Models\File'
    ];
    public $appends = [
        "image_path"
    ];
    public $belongsTo = [
        'category_gallery' => ['Andev\Musicool\Models\CategoryGallery']
    ];
    public function getImagePathAttribute(){
        return $this->image->getPath();
    }
    public function getCategoryGalleryIdOptions(){
        $options = collect();
        foreach(CategoryGallery::get() as $cat){
            $options[$cat->id] = $cat->name;
        }
        return $options;
    }
    public $rules = [
    ];
}
