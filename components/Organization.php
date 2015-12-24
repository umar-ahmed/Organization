<?php namespace UMAR\Organization\Components;

use Cms\Classes\ComponentBase;
use UMAR\Organization\Models\Settings;
use October\Rain\Database\Model;

class Organization extends ComponentBase
{
    
    public $name;
    public $slogan;
    public $description;
    public $logo;
    public $street_address;
    public $city;
    public $province_state;
    public $post_code;
    public $phone;
    public $email;
    public $facebook;
    public $twitter;

    public function componentDetails()
    {
        return [
            'name'        => 'Organization',
            'description' => 'Contains information about the organization'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
    public function onRun() {
        $settings = Settings::instance();
		$this->name = $settings->name;
		$this->slogan = $settings->slogan;
        $this->description = $settings->description;
		$this->logo = $settings->logo;
        $this->street_address = $settings->street_address;
        $this->city = $settings->city;
        $this->province_state = $settings->province_state;
        $this->post_code = $settings->post_code;
        $this->phone = $settings->phone;
        $this->email = $settings->email;
        $this->facebook = $settings->facebook;
        $this->twitter = $settings->twitter;
    }

}