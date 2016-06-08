<?php namespace Mesb\Survey\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Question Types Back-end Controller
 */
class QuestionTypes extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['survey.questiontypes_access'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Mesb.Survey', 'surveyplugin', 'questiontypes');
    }
}