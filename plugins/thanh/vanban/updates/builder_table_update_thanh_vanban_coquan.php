<?php namespace Thanh\Vanban\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThanhVanbanCoquan extends Migration
{
    public function up()
    {
        Schema::table('thanh_vanban_coquan', function($table)
        {
            $table->string('slug');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('thanh_vanban_coquan', function($table)
        {
            $table->dropColumn('slug');
            $table->increments('id')->unsigned()->change();
        });
    }
}
