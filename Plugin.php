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
    
    /**
     * Registers back-end navigation menus
     *
     * @return array
     */
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
                    'memberships' => [
                        'label'       => 'Memberships',
                        'icon'        => 'icon-user',
                        'url'         => Backend::url('umar/organization/memberships'),
                        'permissions' => ['umar.organization.access_memberships']
                    ],
                    'programs' => [
                        'label'       => 'Programs',
                        'icon'        => 'icon-ticket',
                        'url'         => Backend::url('umar/organization/programs'),
                        'permissions' => ['umar.organization.access_programs']
                    ],
                    'testimonials' => [
                        'label'       => 'Testimonials',
                        'icon'        => 'icon-quote-right',
                        'url'         => Backend::url('umar/organization/testimonials'),
                        'permissions' => ['umar.organization.access_testimonials']
                    ],
                ]
            ]
        ];
    }
    
    /**
     * Registers back-end settings
     *
     * @return array
     */
    public function registerSettings() {
        return [
            'settings' => [
                'label'       => 'Organization',
                'description' => 'Manage organization information.',
                'category'    => 'Organization',
                'icon'        => 'icon-university',
                'class'       => 'UMAR\Organization\Models\Settings',
                'order'       => 500,
                'keywords'    => 'organization logo slogan',
                'permissions' => ['umar.organization.access_settings']
            ],
            'status' => [
                'label'       => 'Status',
                'description' => 'Manage status updates on the website',
                'category'    => 'Organization',
                'icon'        => 'icon-exclamation-circle',
                'class'       => 'UMAR\Organization\Models\Status',
                'order'       => 600,
                'keywords'    => 'organization status court',
                'permissions' => ['umar.organization.access_settings']
            ]
        ];
    }
    
    /**
     * Registers components
     *
     * @return array
     */
    public function registerComponents() {
        return [
            'UMAR\Organization\Components\Organization' => 'organization',
            'UMAR\Organization\Components\CourtStatus' => 'courtStatus',
            'UMAR\Organization\Components\Programs' => 'programs',
            'UMAR\Organization\Components\Memberships' => 'memberships',
        ];
    }
    
    /**
     * Returns permissions associated with this plugin.
     *
     * @return array
     */
    public function registerPermissions() {
        return [
            'umar.organization.access_settings' => [
                'label' => 'Access Organization Settings',
                'tab' => 'Organization'
            ],
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
            'umar.organization.access_memberships' => [
                'label' => 'Manage Memberships',
                'tab' => 'Organization'
            ],
        ];
    }
    
}
