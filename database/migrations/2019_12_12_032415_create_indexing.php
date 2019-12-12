<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indexing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_tags');
            $table->foreign('id_tags')->references('id')->on('tags')->onDelete('cascade');
            $table->string('name',300);
            $table->string('slug',500);
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
        Schema::dropIfExists('indexing');
    }
}
