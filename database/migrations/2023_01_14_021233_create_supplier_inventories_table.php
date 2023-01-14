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
        Schema::create('supplier_inventories', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('Inven_Id');
            $table->foreign('Inven_Id')->references('id')->on('inventories');
            $table->unsignedInteger('Sup_Id');
            $table->foreign('Sup_Id')->references('id')->on('suppliers');
            $table->date('Add_Date');
            $table->integer('Qty');

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
        Schema::dropIfExists('supplier_inventories');
    }
};
