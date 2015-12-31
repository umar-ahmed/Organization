<?php namespace UMAR\Organization\Models;

use Model;

/**
 * Status Model
 */
class Status extends Model {

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'umar_organization_status';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
    
    
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
        'display' => 'required',
        'date' => 'required',
        'status_level' => 'required',
        'message' => 'required',

    ];


}