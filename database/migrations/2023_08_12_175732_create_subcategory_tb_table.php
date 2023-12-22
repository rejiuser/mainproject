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
        Schema::create('subcategory_tb', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Category_id');
            $table->string('Subcategory'); 
            $table->timestamps();
            $table->foreign('Category_id')->references('id')->on('categoryadd_tb');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategory_tb');
    }
};
