<?php namespace Thanh\Vanban\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateThanhVanbanCoquan3 extends Migration
{
    public function up()
    {
        Schema::table('thanh_vanban_coquan', function($table)
        {
            $table->string('trangthai', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('thanh_vanban_coquan', function($table)
        {
            $table->smallInteger('trangthai')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
