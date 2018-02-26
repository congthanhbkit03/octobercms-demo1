<?php namespace Thanh\Tintuc\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThanhTintuc extends Migration
{
    public function up()
    {
        Schema::create('thanh_tintuc_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('tendm');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thanh_tintuc_');
    }
}
