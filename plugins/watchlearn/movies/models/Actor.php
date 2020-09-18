<?php namespace Watchlearn\Movies\Models;

use October\Rain\Database\Model;

/**
 * Model
 */
class Actor extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $fillable=['name','lastname'];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'watchlearn_movies_actors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /*
     *Relations
     */

    public $belongsToMany=[
        'movies'=>[
            'Watchlearn\Movies\Models\Movie',
            'table' =>  'watchlearn_movies_actors_movies',
            'order' =>  'name'
        ]
    ];

    public $attachOne=[
        'actorImage'    =>  'System\Models\File'
    ];

    public function getFullNameAttribute(){
        return $this->name . " " . $this->lastname;
    }
}
