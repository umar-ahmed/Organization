<?php namespace UMAR\Organization\Models;

use Model;

/**
 * Settings Model
 */
class Settings extends Model {

    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'umar_organization_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
    
    
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
        'name'  => 'required',
        'city' => 'alpha',
        'province_state' => 'alpha',
        'post_code' => 'alpha_num',
        'email' => 'email',
        'facebook' => 'url',
        'twitter' => 'url',
    ];


}