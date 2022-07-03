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
        Schema::create('product', function (Blueprint $table) {
            $table->id('productID');
            $table->string('title', 30);
            $table->text('desc');
            $table->float('price', 10, 2);
            $table->string('status', 20);
            $table->float('avg_rating', 10, 2);
            $table->string('img');
            $table->foreignId('styleID')->references('styleID')->on('style');
            $table->foreignId('typeID')->references('typeID')->on('type');
            $table->foreignId('collectionID')->references('collectionID')->on('collection');
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
        Schema::dropIfExists('product');
    }
};
