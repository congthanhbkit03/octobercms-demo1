<?php namespace Cong\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteCongMovie extends Migration
{
    public function up()
    {
        Schema::dropIfExists('cong_movie_');
    }
    
    public function down()
    {
        Schema::create('cong_movie_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('nhatro_id');
            $table->integer('loai_id');
            $table->primary(['nhatro_id','loai_id']);
        });
    }
}
