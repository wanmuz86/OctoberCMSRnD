<?php namespace MeTechSolutionSdnBhd\Promotion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMetechsolutionsdnbhdPromotionPromo extends Migration
{
    public function up()
    {
        Schema::table('metechsolutionsdnbhd_promotion_promo', function($table)
        {
            $table->dropColumn('image_url');
        });
    }
    
    public function down()
    {
        Schema::table('metechsolutionsdnbhd_promotion_promo', function($table)
        {
            $table->string('image_url', 200);
        });
    }
}
