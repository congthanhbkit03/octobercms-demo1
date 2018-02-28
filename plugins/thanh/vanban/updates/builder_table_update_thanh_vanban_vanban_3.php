<?php namespace Thanh\Vanban\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThanhVanbanVanban3 extends Migration
{
    public function up()
    {
        Schema::table('thanh_vanban_vanban', function($table)
        {
            $table->integer('linhvucs');
            $table->integer('loaivbs');
            $table->dropColumn('linhvuc_id');
            $table->dropColumn('loaivb_id');
        });
    }
    
    public function down()
    {
        Schema::table('thanh_vanban_vanban', function($table)
        {
            $table->dropColumn('linhvucs');
            $table->dropColumn('loaivbs');
            $table->integer('linhvuc_id');
            $table->integer('loaivb_id');
        });
    }
}
