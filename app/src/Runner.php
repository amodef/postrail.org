<?php
namespace App;

use App\Model;

final class Runner extends Model
{
    /**
     * Turn off the created_at & updated_at columns
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Fields that can be updated via update()
     * @var array
     */
    protected $fillable = ['race', 'first_name', 'last_name', 'email', 'paid'];

    public $rules = [
        'required' => [
            ['first_name'],
            ['last_name']
        ]
    ];

}
