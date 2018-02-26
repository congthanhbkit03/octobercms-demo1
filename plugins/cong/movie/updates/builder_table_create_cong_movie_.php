<?php namespace Cong\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCongMovie extends Migration
{
    public function up()
    {
        Schema::create('cong_movie_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('nhatro_id');
            $table->integer('loai_id');
            $table->primary(['nhatro_id','loai_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cong_movie_');
    }
}
