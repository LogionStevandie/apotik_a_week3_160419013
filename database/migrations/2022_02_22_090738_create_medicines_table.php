<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('form',255);
            $table->string('formula',255);
            $table->string('description',255);
            $table->bigInteger('price');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->integer('faskes_1');
            $table->integer('faskes_2');
            $table->integer('faskes_3');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign([
                'category_id',
            ]);
        });
        Schema::dropIfExists('products');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicines', function (Blueprint $table) {
            $table->dropForeign([
                'category_id',
            ]);
        });
        Schema::dropIfExists('medicines');

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name', 100);
            $table->bigInteger('product_price');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->timestamps();
        });
    }
}
