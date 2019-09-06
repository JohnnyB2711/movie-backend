<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('external_id')->unique();
            $table->boolean('adult');
            $table->string('poster_path');
            $table->string('original_title');
            $table->string('original_language');
            $table->string('backdrop_path');
            $table->decimal('popularity');
            $table->decimal('vote_average');
            $table->integer('vote_count');
            $table->boolean('video');
            $table->string('title');
            $table->text('overview');
            $table->date('release_date');
            $table->json('genre_ids');
            $table->boolean('viewed');
            $table->boolean('planned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
