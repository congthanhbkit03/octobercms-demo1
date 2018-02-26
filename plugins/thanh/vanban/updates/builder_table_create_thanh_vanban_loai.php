<?php namespace Thanh\Vanban\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThanhVanbanLoai extends Migration
{
    public function up()
    {
        Schema::create('thanh_vanban_loai', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('loai');
            $table->string('ngonngu');
            $table->smallInteger('trangthai');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thanh_vanban_loai');
    }
}
