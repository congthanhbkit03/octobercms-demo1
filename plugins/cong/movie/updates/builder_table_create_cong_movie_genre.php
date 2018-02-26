<?php namespace Cong\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCongMovieGenre extends Migration
{
    public function up()
    {
        Schema::create('cong_movie_genre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cong_movie_genre');
    }
}
