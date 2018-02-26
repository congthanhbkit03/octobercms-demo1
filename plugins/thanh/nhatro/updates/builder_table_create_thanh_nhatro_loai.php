<?php namespace Thanh\Nhatro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThanhNhatroLoai extends Migration
{
    public function up()
    {
        Schema::create('thanh_nhatro_loai', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('ten');
            $table->string('ghichu');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thanh_nhatro_loai');
    }
}
