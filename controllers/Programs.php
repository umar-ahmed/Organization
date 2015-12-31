<?php namespace UMAR\Organization\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Flash;
use UMAR\Organization\Models\Program;

/**
 * Programs Back-end Controller
 */
class Programs extends Controller
{
    
    public $requiredPermissions = ['umar.organization.access_programs'];
    
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('UMAR.Organization', 'organization', 'programs');
    }
    
        
    /**
     * Deleted checked programs.
     */
    public function onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $programId) {
                if (!$program = Program::find($programId)) {
                    continue;
                }

                $program->delete();
            }

            Flash::success('Program successfully deleted.');
        } else {
            Flash::error('No program selected.');
        }

        return $this->listRefresh();
    }
}