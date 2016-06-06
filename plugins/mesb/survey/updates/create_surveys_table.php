<?php namespace Mesb\Survey\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSurveysTable extends Migration
{

    public function up()
    {
        Schema::create('mesb_survey_surveys', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->boolean('activated')->default(false);
            $table->timestamps();
        });

        Schema::create('mesb_survey_surveys_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('survey_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->primary(['service_id', 'survey_id'], 'survey_service');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mesb_survey_surveys');
        Schema::dropIfExists('mesb_survey_surveys_services');
    }

}
