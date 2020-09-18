<?php namespace Watchlearn\Movies\Models;

use October\Rain\Database\Model;

/**
 * Model
 */
class Genre extends Model
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
    public $table = 'watchlearn_movies_genres';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /*
     * Relations
     * */
    public $belongsToMany=[
        'movies'=>[
            'Watchlearn\Movies\Models\Movie',
            'table' =>  'watchlearn_movies_movies_genres',
            'order' =>  'name'
        ]
    ];
}
