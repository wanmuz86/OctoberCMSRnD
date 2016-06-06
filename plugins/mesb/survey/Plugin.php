<?php
namespace Mesb\Survey;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function registerComponents()
    {
        return [
            'Mesb\Survey\Components\Vote'       => 'poll',
        ];
    }
    public function registerSettings()
    {
    }
/*
    public function registerNavigation()
    {
        return [
            'agency' => [
                'label'       => 'Muse Survey',
                'url'         => Backend::url('mesb/survey/polls'),
                'icon'        => 'icon-bar-chart-o',


                'sideMenu' => [
                    'polls' => [
                        'label'       => 'Polls',
                        'icon'        => 'icon-bar-chart-o',
                        'url'         => Backend::url('mesb/survey/polls'),
                    ],
                ]
            ]
        ];
    }
*/
}
