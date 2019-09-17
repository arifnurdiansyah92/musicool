<?php namespace Andev\Musicool\Models;

use Model;

/**
 * Model
 */
class CategoryGallery extends Model
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
    public $table = 'andev_musicool_category_gallery';
    public $hasMany = [
        'gallery' => ['Andev\Musicool\Models\Gallery']
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
