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
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customerID');
            $table->string('first_name', 10);
            $table->string('last_name', 10);
            $table->string('email', 30)->unique();
            $table->string('user_name', 30)->unique();
            $table->string('password', 30);
            $table->string('phone', 15)->unique();
            $table->string('address');
            $table->rememberToken();
            $table->integer('point');
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
        Schema::dropIfExists('customer');
    }
};
