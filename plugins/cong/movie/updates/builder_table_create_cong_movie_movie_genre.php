<?php namespace Cong\Movie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCongMovieMovieGenre extends Migration
{
    public function up()
    {
        Schema::create('cong_movie_movie_genre', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('genre_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cong_movie_movie_genre');
    }
}
