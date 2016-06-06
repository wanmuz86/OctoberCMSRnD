<?php namespace Mesb\Survey\Models;

use Model;

/**
 * Poll Model
 */
class Poll extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mesb_survey_polls';

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
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public static function getPercentById($pollId, $answerId)
    {
        $pollQuery = self::where('poll_id', $pollId)->count();
        $pollAnswerQuery = self::where('poll_id', $pollId)->where('answer_id', $answerId)->count();

        if($pollAnswerQuery != 0)
        {
            $percent = round($pollAnswerQuery / $pollQuery * 100);
            return $percent;
        }
        else
            return '0';
    }
}