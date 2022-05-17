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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_sessions', 50)->nullable();
            $table->string('codeEtab_sessions', 50)->nullable();
            $table->string('sessionEtab_sessions', 50)->nullable();
            $table->integer('encours_sessions')->default(0);
            $table->integer('statut_sessions')->default(0);
            $table->integer('type_sessions')->default(0);
            $table->date('datedeb_sessions')->nullable();
            $table->date('datefin_sessions')->nullable();
            $table->string('calendrier_sessions', 50)->nullable();
            $table->string('next_sessions')->nullable();
            $table->integer('nbinscrit_sessions')->default(0);
            $table->integer('nbsortant_sessions')->default(0);
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
        Schema::dropIfExists('sessions');
    }
};
