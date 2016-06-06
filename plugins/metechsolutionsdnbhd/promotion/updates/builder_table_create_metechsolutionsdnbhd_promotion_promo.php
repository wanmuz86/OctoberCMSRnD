<?php namespace MeTechSolutionSdnBhd\Promotion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMetechsolutionsdnbhdPromotionPromo extends Migration
{
    public function up()
    {
        Schema::create('metechsolutionsdnbhd_promotion_promo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 200);
            $table->string('image_url', 200);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->boolean('activated');
            $table->string('promo_code');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('metechsolutionsdnbhd_promotion_promo');
    }
}
