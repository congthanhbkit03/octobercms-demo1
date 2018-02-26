<?php namespace Cong\Movie\Models;

use Model;

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
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'cong_movie_genre';

    public $belongsToMany = [
        'movies' => [
            'Cong\Movie\Models\Movie',
            'table' => 'cong_movie_movie_genre',
            'order'      => 'name'
        ]
    ];
}
