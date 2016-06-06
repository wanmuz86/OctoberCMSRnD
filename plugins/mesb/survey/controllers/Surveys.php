<?php namespace Mesb\Survey\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Surveys Back-end Controller
 */
class Surveys extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Mesb.Survey', 'survey', 'surveys');
    }

  
}