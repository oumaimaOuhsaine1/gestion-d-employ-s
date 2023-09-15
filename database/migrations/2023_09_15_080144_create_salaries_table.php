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
        Schema::create('salaries', function (Blueprint $table) {
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->string('fonction');
            $table->string('societe');
            $table->string('direction');
            $table->string('service');
            $table->integer('matricule_sup');
            $table->primary('matricule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};
