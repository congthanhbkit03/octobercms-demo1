<?php namespace Cong\Movie\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
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
    public $table = 'cong_movie_movie';

    public $attachOne = [
        'poster' => ['System\Models\File']
    ];

    public $attachMany = [
        'gallery' => ['System\Models\File']
    ];

    public $belongsToMany = [
	    'genres' => [
	        'Cong\Movie\Models\Genre',
	        'table' => 'cong_movie_movie_genre',
	        'order'      => 'title'
	    ]
];
}
