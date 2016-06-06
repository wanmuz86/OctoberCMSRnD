<?php namespace MeTechSolutionSdnBhd\Promotion\Models;

use Model;

/**
 * Model
 */
class Promotion extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];
    protected $dates = ['start_date', 'end_date'];
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'metechsolutionsdnbhd_promotion_promo';

    public $attachOne = [
        'image_url' => 'System\Models\File'
    ];

    /**
     * Returns the public image file path to this user's avatar.
     */
    public function getBannerImage($size = 25, $options = null)
    {
        if (is_string($options)) {
            $options = ['default' => $options];
        }
        elseif (!is_array($options)) {
            $options = [];
        }

        // Default is "mm" (Mystery man)
        $default = array_get($options, 'default', 'mm');
    echo 'url is'+ $this->avatar->getPath();
        exit();
        if ($this->avatar) {
            return $this->avatar->getThumb($size, $size, $options);
        }
        else {
            return '//www.gravatar.com/avatar/' .
            md5(strtolower(trim($this->email))) .
            '?s='. $size .
            '&d='. urlencode($default);
        }
    }
}