<?php
namespace Mesb\Survey;

use System\Classes\PluginBase;
use Backend;
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
    public function registerNavigation()
    {
        return [
            'surveyplugin' => [
                'label'       => 'Survey',
                'url'         => Backend::url('mesb/survey/surveys'),
                'icon'        => 'icon-copy',
                'permissions' => ['survey.*'],
                'order'       => 500,

                'sideMenu' => [
                    'surveys' => [
                        'label'       => 'Surveys',
                        'icon'        => 'icon-edit',
                        'url'         => Backend::url('mesb/survey/surveys/create'),
                        'permissions' => ['survey.surveys_access']
                    ],
                    'questiontypes' => [
                        'label'       => 'Type of Questions',
                        'icon'        => 'icon-filter',
                        'url'         => Backend::url('mesb/survey/questiontypes'),
                        'permissions' => ['survey.survey_access']
                    ],
                    'questions' => [
                        'label'       => 'Questions',
                        'icon'        => 'icon-question',
                        'url'         => Backend::url('mesb/survey/questions/'),
                        'permissions' => ['survey.questions_access']
                    ]
                ]
            ]
        ];
    }
}
