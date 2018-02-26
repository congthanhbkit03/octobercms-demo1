<?php namespace Thanh\Tintuc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThanhTintuc extends Migration
{
    public function up()
    {
        Schema::table('thanh_tintuc_', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('thanh_tintuc_', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
