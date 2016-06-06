<?php namespace mesb\Muse;

use System\Classes\PluginBase;
use Backend\Models\User;
use Backend;
class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerPermissions()
    {
        return [
            'mesb.muse.manage_agencies' => [
                'label' => 'Manage Agencies',
                'tab' => 'MDEC Agency'
            ],
            'mesb.muse.manage_services' => [
                'label' => 'Manage Services',
                'tab' => 'MDEC Agency'
            ]
        ];
    }
    public function boot()
    {
        // ...
        User::extend(function($model){
            $model->belongsTo['agency'] = ['Mesb\Muse\Models\Agency'];
        });

        \Backend\Controllers\Users::extendListColumns(function ($list) {
            $list->addColumns([
                'agency' => [
                    'label' => 'Agency',
                    'relation' => 'agency',
                    'select' => 'name'
                ]
            ]);
        });
    }

    public function registerNavigation()
    {
        return [
            'agency' => [
                'label'       => 'Agency',
                'url'         => Backend::url('mesb/muse/agencies'),
                'icon'        => 'icon-pencil',
                'permissions' => ['mesb.muse.*'],
                'order'       => 500,

                'sideMenu' => [
                    'new_agency' => [
                        'label'       => 'New Agency',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('mesb/muse/agencies/create'),
                        'permissions' => ['mesb.muse.manage_agencies']
                    ],
                    'services' => [
                        'label'       => 'Services',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('mesb/muse/services'),
                        'permissions' => ['mesb.muse.manage_services']
                    ]
                ]
            ]
        ];
    }
}
