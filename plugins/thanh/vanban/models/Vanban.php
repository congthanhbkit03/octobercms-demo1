<?php namespace Thanh\Vanban\Models;

use Model;

/**
 * Model
 */
class Vanban extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'thanh_vanban_vanban';

    public $attachOne = [
        'file' => ['System\Models\File']
    ];

    public $belongsToMany = [
        'linhvucs' => [
            'Thanh\Vanban\Models\Linhvuc',
            'table' => 'thanh_vanban_vanban_linhvuc',
            'order'      => 'linhvuc'
        ]
    ];  
}
