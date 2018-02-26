<?php namespace Thanh\Nhatro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateThanhNhatroNhatro extends Migration
{
    public function up()
    {
        Schema::create('thanh_nhatro_nhatro', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('tennhatro');
            $table->string('diachi');
            $table->double('lat', 10, 0);
            $table->double('long', 10, 0);
            $table->string('dienthoai');
            $table->text('thongtin');
            $table->integer('gia');
            $table->integer('loai');
            $table->integer('sophongtrong');
            $table->integer('dientich');
            $table->boolean('cointernet');
            $table->boolean('codieuhoa');
            $table->boolean('covesinhtrong');
            $table->boolean('comaynuocnong');
            $table->integer('trangthai');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('thanh_nhatro_nhatro');
    }
}
