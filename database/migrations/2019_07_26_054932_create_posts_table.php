<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',256);
            $table->string('subtitle',256);
            $table->string('slug',256);
            $table->text('body');
            $table->boolean('status')->nullable();
            $table->string('posted_by')->nullable();
            $table->string('image')->nullable();
            $table->string('like')->nullable();
            $table->string('dislike')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
