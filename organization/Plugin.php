<?php namespace UMAR\Organization;

use Backend;
use Backend\Facades\BackendAuth;
use System\Classes\PluginBase;

/**
 * Organization Plugin Information File
 */
class Plugin extends PluginBase {

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails() {
        return [
            'name'        => 'Organization',
            'description' => 'A simple plugin for information about an organization.',
            'author'      => 'Umar Ahmed',
            'icon'        => 'icon-university',
            'homepage'    => 'http://planet404.com'
        ];
    }
    
    public function registerNavigation() {
        return [
            'organization' => [
                'label'       => 'Organization',
                'url'         => Backend::url('umar/organization/employees'),
                'icon'        => 'icon-university',
                'permissions' => ['umar.organization.*'],
                'order'       => 500,
                'sideMenu' => [
                    'employees' => [
                        'label'       => 'Employees',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('umar/organization/employees'),
                        'permissions' => ['umar.organization.access_employees']
                    ],
                ]
            ]
        ];
    }
    
    public function registerPermissions() {
        return [
            'umar.organization.access_employees' => [
                'label' => 'Manage employees',
                'tab' => 'Organization'
            ],
        ];
    }
    
}
