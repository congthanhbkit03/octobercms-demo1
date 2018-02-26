<?php namespace Thanh\Vanban\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThanhVanbanVanbanLinhvuc extends Migration
{
    public function up()
    {
        Schema::create('thanh_vanban_vanban_linhvuc', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('vanban_id');
            $table->integer('linhvuc_id');
            $table->primary(['vanban_id','linhvuc_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thanh_vanban_vanban_linhvuc');
    }
}
