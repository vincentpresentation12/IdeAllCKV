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
        Schema::create('activity', function (Blueprint $table) {
            $table->id();
            $table->string('nameActivity');
            $table->float('priceActivity');
            $table->text('descrActivity')->nullable();
            $table->enum('type', ['virtuel','physique']);
            $table->time('duration');
            $table->string('urlActivity')->nullable();
            //$table->foreignId('idAddress')->nullable()->constrained('address');
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
        Schema::dropIfExists('activity');
    }
};
