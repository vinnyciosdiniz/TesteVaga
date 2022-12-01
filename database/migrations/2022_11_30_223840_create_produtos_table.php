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
    Schema::create('produtos', function (Blueprint $table) {
        
        $table->id();
        $table->string('nome')->default('produto sem nome');
        $table->string('valor')->default('100');
        $table->string('quantidade')->default('1');
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
        Schema::dropIfExists('produtos');
    }
};
