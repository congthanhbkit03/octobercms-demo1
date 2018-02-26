<?php namespace Cong\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCongMovieMovie extends Migration
{
    public function up()
    {
        Schema::create('cong_movie_movie', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('year');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cong_movie_movie');
    }
}
