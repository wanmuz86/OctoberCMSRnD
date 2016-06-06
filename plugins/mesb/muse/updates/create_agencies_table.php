<?php namespace Mesb\Muse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAgenciesTable extends Migration
{

    public function up()
    {
        Schema::create('mesb_muse_agencies', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('image_url', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mesb_muse_agencies');
    }

}
