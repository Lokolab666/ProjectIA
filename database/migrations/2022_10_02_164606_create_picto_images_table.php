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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->binary('imageBlob');
            $table->biginteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });

        Schema::create('picto_images_patient', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->biginteger('image_id')->unsigned();
            $table->biginteger('patient_id')->unsigned();
            $table->foreign('image_id')->references('id')->on('images');
            $table->foreign('patient_id')->references('id')->on('patients');
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
        Schema::dropIfExists('categories');
        Schema::dropIfExists('images');
        Schema::dropIfExists('picto_images_patient');
    }
};
