<?php namespace Mesb\Survey\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePollsTable extends Migration
{

    public function up()
    {
        Schema::create('mesb_survey_polls', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('answer_id');
            $table->integer('poll_id');
            $table->integer('service_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mesb_survey_polls');
    }

}
