<?php namespace Thanh\Vanban\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThanhVanbanCoquan2 extends Migration
{
    public function up()
    {
        Schema::table('thanh_vanban_coquan', function($table)
        {
            $table->integer('thutu');
        });
    }
    
    public function down()
    {
        Schema::table('thanh_vanban_coquan', function($table)
        {
            $table->dropColumn('thutu');
        });
    }
}
