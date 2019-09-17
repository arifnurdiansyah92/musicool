<?php namespace Andev\Musicool\Models;

use Model;

/**
 * Model
 */
class Subscriber extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'andev_musicool_subscribers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
