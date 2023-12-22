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
        Schema::create('order_product_tb', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Order_id');
            $table->string('product_id');
            $table->string('quantity');
            $table->string('price');
            $table->string('status');
            $table->foreign('Order_id')->references('id')->on('order_tb');
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
        Schema::dropIfExists('order_product_tb');
    }
};
