<?php namespace Thanh\Vanban\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThanhVanbanVanban2 extends Migration
{
    public function up()
    {
        Schema::table('thanh_vanban_vanban', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('thanh_vanban_vanban', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
