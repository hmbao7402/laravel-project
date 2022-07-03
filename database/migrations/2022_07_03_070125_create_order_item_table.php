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
        Schema::create('order_item', function (Blueprint $table) {
            $table->id('itemID');
            $table->foreignId('orderID')->references('orderID')->on('order');
            $table->foreignId('productID')->references('productID')->on('product');
            $table->float('price', 10, 2);
            $table->float('subtotal', 10, 2);
            $table->float('discount', 10, 2);
            $table->float('total', 10, 2);
            $table->integer('quantity');
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
        Schema::dropIfExists('order_item');
    }
};
