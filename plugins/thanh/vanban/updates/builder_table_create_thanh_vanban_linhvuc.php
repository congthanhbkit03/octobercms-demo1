<?php namespace Thanh\Vanban\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThanhVanbanLinhvuc extends Migration
{
    public function up()
    {
        Schema::create('thanh_vanban_linhvuc', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('linhvuc');
            $table->string('ngonngu');
            $table->smallInteger('trangthai');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thanh_vanban_linhvuc');
    }
}
