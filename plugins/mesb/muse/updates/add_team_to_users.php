<?php
/**
 * Created by PhpStorm.
 * User: me-techmacprouser2
 * Date: 04/06/2016
 * Time: 7:25 PM
 */

namespace Mesb\Muse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddTeamToUsers extends Migration
{
    public function up()
    {
        if(!Schema::hasColumn('backend_users', 'agency_id'))
        {
            Schema::table('backend_users', function($table)
            {
                $table->integer('agency_id')->unsigned()->index()->nullable();
            });
        }
    }

    public function down()
    {
        if(Schema::hasColumn('backend_users', 'agency_id'))
        {
            Schema::table('backend_users', function($table)
            {
                $table->dropColumn('agency_id');
            });
        }
    }

}