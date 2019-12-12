<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_index');
            $table->foreign('id_index')->references('id')->on('indexing')->onDelete('cascade');
            $table->unsignedBigInteger('id_city');
            $table->foreign('id_city')->references('id')->on('city')->onDelete('cascade');
            $table->string('creator',300);
            $table->string('title',300);
            $table->string('images', 500);
            $table->string('content', 5000);
            $table->string('slug', 500);
            $table->bigInteger('views');
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
        Schema::dropIfExists('detail');
    }
}
