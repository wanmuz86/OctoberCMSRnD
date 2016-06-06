<?php namespace Mesb\Muse\Models;

use Model;

/**
 * Service Model
 */
class Service extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mesb_muse_services';

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
        'agency' => "Mesb\Muse\Models\Agency"
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
    public $requiredPermissions = ['mesb.muse.manage_services'];
    // ...

    public function getAgencyIdOptions()
    {
        $agencies = \Mesb\Muse\Models\Agency::all(['id', 'name']);
        $agenciesOptions = [];

        $agencies->each(function($agency) use (&$agenciesOptions) {
            $agenciesOptions[$agency->id] = $agency->name;
        });

        return $agenciesOptions;
    }
}