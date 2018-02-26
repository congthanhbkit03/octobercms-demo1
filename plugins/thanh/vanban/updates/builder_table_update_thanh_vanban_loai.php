<?php namespace Thanh\Vanban\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThanhVanbanLoai extends Migration
{
    public function up()
    {
        Schema::table('thanh_vanban_loai', function($table)
        {
            $table->integer('thutu');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('thanh_vanban_loai', function($table)
        {
            $table->dropColumn('thutu');
            $table->dropColumn('slug');
        });
    }
}
