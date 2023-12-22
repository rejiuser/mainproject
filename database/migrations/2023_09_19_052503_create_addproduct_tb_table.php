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
        Schema::create('addproduct_tb', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Seller_id');
            $table->string('Product_Name');
            $table->string('Category');
            $table->string('Subcategory');
            $table->string('Price');
            $table->string('Quantity');
            $table->string('Photo');
            $table->foreign('Seller_id')->references('id')->on('seller_reg_tb');
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
        Schema::dropIfExists('addproduct_tb');
    }
};
