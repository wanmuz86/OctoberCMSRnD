<?php namespace Mesb\Survey\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Mesb\Muse\Models\Question;

/**
 * Questions Back-end Controller
 */
class Questions extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['survey.questions_access'];
    
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Mesb.Survey', 'surveyplugin', 'questions');
    }
    public function create_onSave()
    {
        $inputs = post('Question');

        // save question
        $questionModel = new \Mesb\Survey\Models\Question;
        $questionModel->question = $inputs['question'];
        $questionModel->type_id = $inputs['type_id'];
		$questionModel->survey_id = $inputs['survey_id'];

		if ($inputs['type_id'] == '3'){
			$questionModel->answer_1 = '1';
			$questionModel->answer_2 = '2';
			$questionModel->answer_3 = '3';
			$questionModel->answer_4 = '4';
			$questionModel->answer_5 = '5';
		}
		else{
			$questionModel->answer_1 = $inputs['answer_1'];
			$questionModel->answer_2 = $inputs['answer_2'];
			$questionModel->answer_3 = $inputs['answer_3'];
			$questionModel->answer_4 = $inputs['answer_4'];
			$questionModel->answer_5 = $inputs['answer_5'];
		}
	    
        $questionModel->save();

        \Flash::success("Question saved successfully");

        return $this->makeRedirect('update', $questionModel);
    }
	
    public function update_onSave($recordId)
    {
        $inputs = post('Question');

        // save question
		$questionModel = \Mesb\Survey\Models\Question::findOrFail($recordId);
        $questionModel->question = $inputs['question'];
        $questionModel->type_id = $inputs['type_id'];
		$questionModel->survey_id = $inputs['survey_id'];
		if ($inputs['type_id'] == '3'){
			$questionModel->answer_1 = '1';
			$questionModel->answer_2 = '2';
			$questionModel->answer_3 = '3';
			$questionModel->answer_4 = '4';
			$questionModel->answer_5 = '5';
		}
		else{
			$questionModel->answer_1 = $inputs['answer_1'];
			$questionModel->answer_2 = $inputs['answer_2'];
			$questionModel->answer_3 = $inputs['answer_3'];
			$questionModel->answer_4 = $inputs['answer_4'];
			$questionModel->answer_5 = $inputs['answer_5'];
		}
	    
        $questionModel->save();

        \Flash::success("Question saved successfully");

        return $this->makeRedirect('update', $questionModel);
    }
}