<?php namespace UMAR\Organization\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use UMAR\Organization\models\Testimonial;
use Flash;

/**
 * Testimonials Back-end Controller
 */
class Testimonials extends Controller {
    
    public $requiredPermissions = ['umar.organization.access_testimonials'];
    
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('UMAR.Organization', 'organization', 'testimonials');
    }
    
        
    /**
     * Deleted checked testimonials.
     */
    public function onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $testimonialId) {
                if (!$testimonial = Testimonial::find($testimonialId)) {
                    continue;
                }

                $testimonial->delete();
            }

            Flash::success('Testimonial successfully deleted.');
        } else {
            Flash::error('No testimonial selected.');
        }

        return $this->listRefresh();
    }
}