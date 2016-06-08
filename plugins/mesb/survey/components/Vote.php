<?php
namespace Mesb\Survey\Components;
/**
 * Created by PhpStorm.
 * User: me-techmacprouser2
 * Date: 05/06/2016
 * Time: 12:17 PM
 */


use Cms\Classes\CmsPropertyHelper;
use Cms\Classes\ComponentBase;
use Illuminate\Validation;
use Mesb\Survey\Models\Question as Question;
use Mesb\Survey\Models\Poll as Polls;
use Mesb\Survey\Models\Survey as Surveys;
use Mesb\Muse\Models\Service as Service;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Validator;


class Vote extends ComponentBase
{
    public $currentService;
    public $currentSurvey;
    public $latestPoll;
    public $latestPollAnswers;
    public $request;
    public $vote;
    public $property;
    public $poll_id;
    public $service_id;


    /**
     * Returns information about this component, including name and description.
     */
    public function componentDetails()
    {
        return [
            'name'        => 'Poll',
            'description' => 'Adds a poll form.'
        ];
    }
    public function defineProperties()
    {
        return [
            'poll_id' => [
                'title'       => 'Survey ID',
                'description' => 'Enter Survey ID',
                'default'     => '{{ :poll_id }}',
                'type'        => 'string'
            ],
            'service_id' => [
                'title'       => 'Service ID',
                'description' => 'Enter Service ID',
                'default'     => '{{ :service_id }}',
                'type'        => 'string'
            ],
        ];
    }

    public function getSurveyOptions()
    {
        return array_add(Surveys::all()->lists('name', 'id'), '', '-none-');
    }

    public function getServiceOptions()
    {
        return array_add(Service::all()->lists('name', 'id'), '', '-none-');
    }


    public function onRun()
    {
        $this->addCss('/plugins/mesb/survey/assets/css/poll.css');
        $this->addJs('/plugins/mesb/survey/assets/js/poll.js');

        $this->request = Request::createFromGlobals();
        $this->vote = $this->page['vote'] = new Polls;
    }
    public function onRender()
    {
        $this->currentService = $this->page['currentService'] = Service::getCurrentService($this->property('service_id'));
        $this->currentSurvey = $this->page['currentSurvey'] = Surveys::getCurrentSurvey(($this->property('service_id') == 0 ? Surveys::getLatestSurveyId() : $this->property('service_id')));
        $this->latestPoll = $this->page['latestPoll'] = Question::getLatestPoll( $this->currentSurvey->id);
        $this->latestPollAnswers = $this->page['latestPollAnswers'] = Question::getLatestPollAnswers( $this->currentSurvey->id);
    }

    public function onPoll()
    {
        $this->request = Request::createFromGlobals();
  
          foreach (post('polls') as $poll) {
                $addVote = new Polls;
                $addVote->poll_id = ($poll['id'] );
                $addVote->service_id = post('service');
                $addVote->answer_id = \Input::get('vote_answer_'.$poll['id']);
                $addVote->save();
            }

        $this->page['vote'] = new Polls;
        $this->latestPoll = $this->page['latestPoll'] = Question::getLatestPoll($poll['survey_id']);
        $this->latestPollAnswers = $this->page['latestPollAnswers'] = Question::getLatestPollAnswers($poll['survey_id']);
	}
    
}
