<?php namespace UMAR\Organization\Models;

use Model;

/**
 * Testimonial Model
 */
class Testimonial extends Model {
        
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
        'content' => 'required',
        'source' => 'required',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'umar_organization_testimonials';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

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