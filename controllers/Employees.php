<?php namespace UMAR\Organization\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Flash;
use UMAR\Organization\Models\Employee;

/**
 * Employees Back-end Controller
 */
class Employees extends Controller {
    
    public $requiredPermissions = ['umar.organization.access_employees'];
    
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct() {
        parent::__construct();
        
        BackendMenu::setContext('UMAR.Organization', 'organization', 'employees');
    }
    
    /**
     * Deleted checked employees.
     */
    public function onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $employeeId) {
                if (!$employee = Employee::find($employeeId)) {
                    continue;
                }

                $employee->delete();
            }

            Flash::success('Employee successfully deleted.');
        } else {
            Flash::error('No employee selected.');
        }

        return $this->listRefresh();
    }
}