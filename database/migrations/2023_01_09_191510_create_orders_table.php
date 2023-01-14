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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('user_id')->nullable();;
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('username')->nullable();;
            $table->foreign('username')->references('name')->on('users');
            $table->string('email')->nullable();;
            $table->foreign('email')->references('email')->on('users');
            $table->unsignedInteger('tell_no')->nullable();;
            $table->foreign('tell_no')->references('tell_no')->on('users');
            $table->unsignedInteger('Menu_id')->nullable();;
            $table->foreign('Menu_id')->references('id')->on('menus');
            $table->string('Menu_name')->nullable();;
            $table->foreign('Menu_name')->references('menu_Name')->on('menus');
            $table->Integer('Qty')->nullable();
            $table->double('Price')->nullable();
            $table->string('Order_Status')->nullable();
            $table->string('Payment_Status')->nullable();

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
        Schema::dropIfExists('orders');
    }
};
