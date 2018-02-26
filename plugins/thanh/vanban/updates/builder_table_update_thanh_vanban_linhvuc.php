<?php namespace Thanh\Vanban\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThanhVanbanLinhvuc extends Migration
{
    public function up()
    {
        Schema::table('thanh_vanban_linhvuc', function($table)
        {
            $table->smallInteger('thutu');
            $table->string('slug');
            $table->string('linhvuc')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('thanh_vanban_linhvuc', function($table)
        {
            $table->dropColumn('thutu');
            $table->dropColumn('slug');
            $table->integer('linhvuc')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
