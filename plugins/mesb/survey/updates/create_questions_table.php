<?php namespace Mesb\Survey\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateQuestionsTable extends Migration
{

    public function up()
    {
        Schema::create('mesb_survey_questions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('question');
            $table->string('answer_1');
            $table->string('answer_2');
            $table->string('answer_3');
            $table->string('answer_4');
            $table->string('answer_5');
            $table->integer('survey_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->string('question_bm');
            $table->string('answer_bm_1');
            $table->string('answer_bm_2');
            $table->string('answer_bm_3');
            $table->string('answer_bm_4');
            $table->string('answer_bm_5');
			$table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('mesb_survey_questions');
    }

}
