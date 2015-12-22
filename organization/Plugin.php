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
                        'icon'        => 'icon-users',
                        'url'         => Backend::url('umar/organization/employees'),
                        'permissions' => ['umar.organization.access_employees']
                    ],
                    'roles' => [
                        'label'       => 'Roles',
                        'icon'        => 'icon-sitemap',
                        'url'         => Backend::url('umar/organization/roles'),
                        'permissions' => ['umar.organization.access_roles']
                    ],
                    'programs' => [
                        'label'       => 'Programs',
                        'icon'        => 'icon-ticket',
                        'url'         => Backend::url('umar/organization/programs'),
                        'permissions' => ['umar.organization.access_programs']
                    ],
                    'testimonials' => [
                        'label'       => 'Testimonials',
                        'icon'        => 'icon-comment-o',
                        'url'         => Backend::url('umar/organization/testimonials'),
                        'permissions' => ['umar.organization.access_testimonials']
                    ],
                ]
            ]
        ];
    }
    
    public function registerPermissions() {
        return [
            'umar.organization.access_employees' => [
                'label' => 'Manage Employees',
                'tab' => 'Organization'
            ],
            'umar.organization.access_roles' => [
                'label' => 'Manage Roles',
                'tab' => 'Organization'
            ],
            'umar.organization.access_programs' => [
                'label' => 'Manage Programs',
                'tab' => 'Organization'
            ],
            'umar.organization.access_testimonials' => [
                'label' => 'Manage Testimonials',
                'tab' => 'Organization'
            ],
        ];
    }
    
}
