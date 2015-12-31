<?php namespace UMAR\Organization\Models;

use Model;

/**
 * Employee Model
 */
class Employee extends Model
{
    
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
        'first_name' => 'required',
        'last_name'  => 'required',
        'email'      => 'email',
        'avatar'     => 'image',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'umar_organization_employees';
        
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
            'UMAR\Organization\Models\Role',
            'table' => 'umar_organization_employees_roles'
        ],
        'programs' => [
            'UMAR\Organization\Models\Program',
            'table' => 'umar_organization_employees_programs',
            'key' => 'employee_id',
            'otherKey' => 'program_id',
        ],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'avatar' => 'System\Models\File'
    ];
    public $attachMany = [];

    
}