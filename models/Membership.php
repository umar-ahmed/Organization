<?php namespace UMAR\Organization\Models;

use Model;

/**
 * Membership Model
 */
class Membership extends Model
{
    
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'regular_rate' => 'required|numeric',
        'early_rate' => 'numeric',
        'new_rate' => 'numeric',        
    ];

    
    protected $jsonable = ['features']; 

    /**
     * @var string The database table used by the model.
     */
    public $table = 'umar_organization_memberships';

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