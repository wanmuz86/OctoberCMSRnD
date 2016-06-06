<?php namespace Mesb\Survey\Models;

use Model;

/**
 * Question Model
 */
class Question extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mesb_survey_questions';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'survey' => '\Mesb\Muse\Survey',
        'type' => '\Mesb\Muse\QuestionType'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getSurveyIdOptions()
    {
        $surveys = Survey::all(['id', 'name']);
        $surveysOptions = [];

        $surveys->each(function($survey) use (&$surveysOptions) {
            $surveysOptions[$survey->id] = $survey->name;
        });

        return $surveysOptions;
    }

    public function getTypeIdOptions()
    {
        $types = QuestionType::all(['id', 'name']);
        $typesOptions = [];

        $types->each(function($type) use (&$typesOptions) {
            $typesOptions[$type->id] = $type->name;
        });

        return $typesOptions;
    }

    public static function getLatestPoll($pollId = NULL)
    {
        $latestPoll = self::take(5)->orderBy('created_at', 'desc');
        if($pollId != NULL)
        {
            $latestPoll->where('survey_id', $pollId);
        }

        return $latestPoll->get();
    }

    public static function getLatestPollId()
    {
        return (!count(self::getLatestPoll()) > 0 ? '' : self::getLatestPoll()[0]->id);
    }

    public static function getLatestPollAnswers($pollId = NULL)
    {
        $answerArray = array();

        foreach(self::getLatestPoll(($pollId == 0 ? self::getLatestPollId() : $pollId)) as $answers)
        {
            $returnAnswer = array();
            for($i = 1; $i <= 10; $i++)
            {
                if($answers->{"answer_$i"} != '')
                    $returnAnswer[$i] = $answers->{"answer_$i"};
            }
            $answerArray[$answers->id] = $returnAnswer;
        }

        return $answerArray;
    }
}