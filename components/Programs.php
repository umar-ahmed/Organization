<?php namespace UMAR\Organization\Components;

use Cms\Classes\ComponentBase;
use UMAR\Organization\Models\Program;
use October\Rain\Database\Model;

class Programs extends ComponentBase
{

    public $programs;
    
    public function componentDetails()
    {
        return [
            'name'        => 'Programs List',
            'description' => 'Outputs organization programs'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
    public function onRun() {
		$this->programs = Program::all();
    }

}