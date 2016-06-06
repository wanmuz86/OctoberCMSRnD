<?php namespace Mesb\Muse\Models;

use Model;


/**
 * Agency Model
 */
class Agency extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name' => 'required'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mesb_muse_agencies';

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
        'agencies'  => '\Mesb\Muse\Service',
        'users'      => ['Backend\Models\User']
    ];

    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
    public $requiredPermissions = ['mesb.muse.manage_agencies'];
    public function getUsersOptions()
    {
        return \Backend\Models\User::lists('login', 'id');
    }
}