<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('evaluations', function (Blueprint $table) {
        $table->string('matricule_salarie');
        $table->unsignedBigInteger('id_competence');
        $table->foreign('matricule_salarie')->references('matricule')->on('salaries'); 
        $table->foreign('id_competence')->references('id')->on('competences'); 
        $table->primary(['matricule_salarie', 'id_competence']);
        $table->integer("note");
        $table->timestamps();
    });
}

    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
