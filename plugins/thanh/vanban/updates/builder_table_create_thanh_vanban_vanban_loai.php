<?php namespace Thanh\Vanban\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThanhVanbanVanbanLoai extends Migration
{
    public function up()
    {
        Schema::create('thanh_vanban_vanban_loai', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('vanban_id');
            $table->integer('loai_id');
            $table->primary(['vanban_id','loai_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thanh_vanban_vanban_loai');
    }
}
