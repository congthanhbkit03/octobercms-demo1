<?php namespace Thanh\Vanban\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThanhVanbanVanban extends Migration
{
    public function up()
    {
        Schema::create('thanh_vanban_vanban', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('sohieu');
            $table->text('trichyeu');
            $table->string('file');
            $table->integer('linhvuc_id');
            $table->integer('loaivb_id');
            $table->integer('coquan_id');
            $table->dateTime('ngayhieuluc');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->smallInteger('trangthai');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thanh_vanban_vanban');
    }
}
