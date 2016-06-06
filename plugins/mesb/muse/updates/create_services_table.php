<?php namespace Mesb\Muse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateServicesTable extends Migration
{

    public function up()
    {
        Schema::create('mesb_muse_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('agency_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mesb_muse_agencies');
    }

}
