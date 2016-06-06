<?php namespace Mesb\Survey\Models;

use Model;

/**
 * QuestionType Model
 */
class QuestionType extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mesb_survey_question_types';

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

}