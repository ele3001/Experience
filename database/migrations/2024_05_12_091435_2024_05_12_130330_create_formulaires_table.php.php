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
        Schema::create('formulaires', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->string('nom_site_pratique');
            $table->string('titre');
            $table->string('activite');
            $table->string('lieu');
            $table->date('date');
            $table->string('distance_sous_terre');
            $table->string('priorite');
            $table->text('description_probleme');
            $table->string('etat')->nullable();
            $table->string('type')->default('default');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulaires');
    }
};
