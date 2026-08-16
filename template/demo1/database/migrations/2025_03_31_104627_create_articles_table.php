<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('title_image')->nullable();
            $table->string('heading_1');
            $table->string('description_1');
            $table->string('image_h1')->nullable();
            $table->string('heading_2');
            $table->string('description_2');
            $table->string('image_h2')->nullable();
            $table->string('heading_3');
            $table->string('description_3');
            $table->string('image_h3')->nullable();
            $table->string('hashtags')->nullable();
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
        Schema::dropIfExists('articles');
    }
};
