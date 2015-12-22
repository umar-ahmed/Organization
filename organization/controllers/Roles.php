<?php namespace UMAR\Organization\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Flash;
use UMAR\Organization\Models\Role;

/**
 * Roles Back-end Controller
 */
class Roles extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('UMAR.Organization', 'organization', 'roles');
    }
    
    /**
     * Deleted checked roles.
     */
    public function onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $roleId) {
                if (!$role = Role::find($roleId)) {
                    continue;
                }

                $role->delete();
            }

            Flash::success('Role successfully deleted.');
        } else {
            Flash::error('No role selected.');
        }

        return $this->listRefresh();
    }
}