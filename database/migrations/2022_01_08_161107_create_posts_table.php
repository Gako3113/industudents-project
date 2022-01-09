<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('job_id');
            $table->string('title', 50);
            $table->string('place');
            $table->string('image', 100)->nullable();
            $table->date('start_at');
            $table->date('end_at');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('user_name');
            $table->integer('user_id');
            $table->string('companies');
            $table->string('address');
            $table->integer('phone_number');
            $table->integer('salary');
            $table->datetime('deadline');
            $table->timestamps();
            $table->softDeletes();
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
