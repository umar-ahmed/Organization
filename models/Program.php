<?php namespace UMAR\Organization\Models;

use Model;

/**
 * Program Model
 */
class Program extends Model
{
    
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
    ];
    
    protected $jsonable = ['timings']; 

    /**
     * @var string The database table used by the model.
     */
    public $table = 'umar_organization_programs';

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
        'employees' => [
            'UMAR\Organization\Models\Employee',
            'table' => 'umar_organization_employees_programs',
            'key' => 'program_id',
            'otherKey' => 'employee_id'
        ],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'featured_image' => 'System\Models\File',
    ];
    public $attachMany = [];

}