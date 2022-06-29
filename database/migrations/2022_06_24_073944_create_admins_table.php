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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 10);
            $table->string('lastName', 10);
            $table->string('email', 30)->unique();
            $table->string('username', 30)->unique();
            $table->string('password');
            $table->string('phone', 15)->unique();
            $table->string('address', 100);
            $table->boolean('isSuperAdmin');
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
        Schema::dropIfExists('admins');
    }
};
