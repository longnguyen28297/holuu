<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_index');
            $table->foreign('id_index')->references('id')->on('indexing')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_city');
            $table->foreign('id_city')->references('id')->on('city')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('creator');
            $table->foreign('creator')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('summary',255);
            $table->string('title',255);
            $table->text('images',1000);
            $table->text('content');
            $table->string('slug', 255);
            $table->string('keyword', 255)->nullable();
            $table->bigInteger('views')->defauth(0);
            $table->tinyInteger('censor');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('topic');
    }
}
