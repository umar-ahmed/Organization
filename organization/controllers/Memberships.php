<?php namespace UMAR\Organization\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Flash;
use UMAR\Organization\Models\Membership;

/**
 * Memberships Back-end Controller
 */
class Memberships extends Controller
{
    public $requiredPermissions = ['Umar.Organization.access_memberships'];
    
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('UMAR.Organization', 'organization', 'memberships');
    }
    
    /**
     * Deleted checked memberships.
     */
    public function onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $membershipId) {
                if (!$membership = Membership::find($membershipId)) {
                    continue;
                }

                $membership->delete();
            }

            Flash::success('Membership successfully deleted.');
        } else {
            Flash::error('No membership selected.');
        }

        return $this->listRefresh();
    }
}