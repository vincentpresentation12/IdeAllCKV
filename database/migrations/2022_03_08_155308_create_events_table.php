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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nameEvent');
            $table->date('startDate');
            $table->date('endDate');
            $table->time('duration')->nullable();
            $table->smallInteger('nbAnimNeed');
            $table->smallInteger('nbAnimSub')->default(0);
            $table->smallInteger('nbParticipant');
            $table->string('companyName');
            $table->text('descrEvent');
            $table->boolean('isOpen');
            $table->enum('type',['virtuel', 'physique', 'physique et virtuel']);
            //$table->foreignId('idAnimModo')->constrained('users');
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
        Schema::dropIfExists('events');
    }
};
