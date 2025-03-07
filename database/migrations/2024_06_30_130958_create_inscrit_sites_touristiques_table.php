<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscritSitesTouristiquesTable extends Migration
{
    public function up()
    {
        Schema::create('inscrit_sites_touristiques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inscrit_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->string('price');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inscrit_sites_touristiques');
    }
}
