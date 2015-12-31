<?php namespace UMAR\Organization\Components;

use Cms\Classes\ComponentBase;
use UMAR\Organization\Models\Membership;
use October\Rain\Database\Model;

class Memberships extends ComponentBase
{

    public $memberships;
    public $earlyMemberships;
    public $newMemberships;
    
    public function componentDetails()
    {
        return [
            'name'        => 'Memberships List',
            'description' => 'Outputs organization memberships'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
    public function onRun() {
		$this->memberships = Membership::all();
        $this->earlyMemberships = Membership::where('early_rate', '!=', 0)->get();
        $this->newMemberships = Membership::where('new_rate', '!=', 0)->get();
    }

}