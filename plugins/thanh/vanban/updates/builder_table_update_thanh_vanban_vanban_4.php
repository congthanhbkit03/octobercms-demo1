<?php namespace Thanh\Vanban\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThanhVanbanVanban4 extends Migration
{
    public function up()
    {
        Schema::table('thanh_vanban_vanban', function($table)
        {
            $table->dropColumn('linhvucs');
            $table->dropColumn('loaivbs');
        });
    }
    
    public function down()
    {
        Schema::table('thanh_vanban_vanban', function($table)
        {
            $table->integer('linhvucs');
            $table->integer('loaivbs');
        });
    }
}
