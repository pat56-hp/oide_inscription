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
        Schema::create('inscrits', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('civilite');
            $table->string('nom');
            $table->string('prenoms');
            $table->string('genre');
            $table->string('email');
            $table->string('nationalite');
            $table->string('pays_residence');
            $table->string('inscription_tant_que');
            $table->string('langue_com');
            $table->string('numero_tel');
            $table->string('etat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscrits');
    }
};
