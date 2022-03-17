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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('descrFormations');
            $table->date('startDate');
            $table->date('endDate');
            $table->enum('type', ['virtuel', 'physique', 'physique et virtuel']);
            $table->enum('langue', ['français', 'anglais', 'bilingue'])->default('français');
            $table->foreignId('idActivity')->nullable()->constrained('activity');
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
        Schema::dropIfExists('formations');
    }
};
