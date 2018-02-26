<?php namespace Thanh\Nhatro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThanhNhatroNhatroLoai extends Migration
{
    public function up()
    {
        Schema::create('thanh_nhatro_nhatro_loai', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('nhatro_id');
            $table->integer('loai_id');
            $table->primary(['nhatro_id','loai_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thanh_nhatro_nhatro_loai');
    }
}
