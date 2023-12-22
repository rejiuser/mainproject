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
        Schema::create('order_tb', function (Blueprint $table) {
            $table->id();
            $table->string('buyer_id');
            $table->string('Name');
            $table->string('House_no');
            $table->string('pin');
            $table->string('District');
            $table->string('State');
            $table->string('Mobile');
            $table->string('Landmark');
            $table->string('Total');
            $table->string('Status');
            
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
        Schema::dropIfExists('order_tb');
    }
};
