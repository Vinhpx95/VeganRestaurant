<?php namespace Comchayhotay\Shop\Models;

use Model;

/**
 * Event Model
 */
class Event extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'events';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    protected $rules = [
        'title' => 'required',
        'content' => 'required',
        'start_date' => 'required',
        'end_date' => 'required|after:start_date'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
