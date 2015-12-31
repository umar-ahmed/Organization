<?php namespace UMAR\Organization\Components;

use Cms\Classes\ComponentBase;
use UMAR\Organization\Models\Status;
use October\Rain\Database\Model;

class CourtStatus extends ComponentBase
{

    public $display;
    public $priority;
    public $message;
    public $date;
    
    public function componentDetails()
    {
        return [
            'name'        => 'Court Status',
            'description' => 'Outputs status set in Settings area.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
    public function onRun() {
        $status = Status::instance();
		$this->display = $status->display;
        $this->date = $status->date;
		$this->priority = $status->status_level;
        $this->message = $status->message;
    }

}