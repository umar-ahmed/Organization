<?php namespace UMAR\Organization\Models;

use Model;

/**
 * Role Model
 */
class Role extends Model
{
    
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'executive' => 'required',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'umar_organization_roles';

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
    public $belongsToMany = [
        'roles' => [
            'UMAR\Organization\Models\Employee',
            'table' => 'umar_organization_employees_programs'
        ],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}