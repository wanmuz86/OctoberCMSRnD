<?php namespace Mesb\Survey\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateQuestionTypesTable extends Migration
{

    public function up()
    {
        Schema::create('mesb_survey_question_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mesb_survey_question_types');
    }

}
