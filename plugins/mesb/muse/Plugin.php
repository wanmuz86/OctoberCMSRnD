<?php
namespace Mesb\Muse;

use System\Classes\PluginBase;
use Backend\Models\User;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Muse',
            'description' => 'Muse plugin for Agencies and Services',
            'author' => 'Mesb',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
      
    }

    public function registerSettings()
    {}

    public function registerPermissions()
    {
        return [
            'muse.agencies_access'  => ['label' => 'Agencies Page'],
            'muse.services_access' => ['label' => 'Services Page']
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
            'museplugin' => [
                'label'       => 'Muse',
                'url'         => Backend::url('mesb/muse/agencies'),
                'icon'        => 'icon-leaf',
                'permissions' => ['muse.*'],
                'order'       => 500,

                'sideMenu' => [
                    'agencies' => [
                        'label'       => 'Agency',
                        'icon'        => 'icon-star',
                        'url'         => Backend::url('mesb/muse/agencies/create'),
                        'permissions' => ['muse.agencies_access']
                    ],
                    'services' => [
                        'label'       => 'Services',
                        'icon'        => 'icon-pencil',
                        'url'         => Backend::url('mesb/muse/services'),
                        'permissions' => ['muse.services_access']
                    ]
                ]
            ]
        ];
    }
}
