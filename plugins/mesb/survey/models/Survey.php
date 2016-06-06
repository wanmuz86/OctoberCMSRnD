<?php namespace Mesb\Survey\Models;

use Model;

/**
 * Survey Model
 */
class Survey extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mesb_survey_surveys';

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
    public $hasMany = [
        'questions' => '\Mesb\Muse\Model\Question'
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public static function getCurrentSurvey($surveyId = NULL)
    {
        $currentSurvey = self::take(1)->orderBy('created_at', 'desc');
        if($surveyId != NULL)
        {
            $currentSurvey->where('id', $surveyId);
        }

        return $currentSurvey->get()[0];
    }

    public static function getLatestSurveyId()
    {
        return (!count(self::getCurrentSurvey()) > 0 ? '' : self::getCurrentSurvey()[0]->id);
    }
}