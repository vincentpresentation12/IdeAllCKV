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
            $table->time('duration')->default('00:00:00');
            $table->smallInteger('nbAnimNeed');
            $table->smallInteger('nbAnimSub')->default(0);
            $table->smallInteger('nbParticipant')->default(0);
            $table->string('companyName');
            $table->text('descrEvent');
            $table->boolean('isOpen')->default(0);
            $table->enum('type',['virtuel', 'physique', 'physique et virtuel']);
            $table->enum('langue', ['français', 'anglais', 'bilingue'])->default('français');

            $table->unsignedBigInteger('idAnimModo')->nullable();
            $table->foreign('idAnimModo')->references('id')->on('users');

            $table->unsignedBigInteger('idFormation')->nullable();
            $table->foreign('idFormation')->references('id')->on('formations');

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
