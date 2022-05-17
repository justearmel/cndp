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
        Schema::create('semestres', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_semestres', 50)->nullable();
            $table->string('designation_semestres', 50)->nullable();
            $table->integer('statut_semestres')->default(0);
            $table->string('codeEtab_semestres', 50)->nullable();
            $table->string('sessiontab_semestres', 50)->nullable();
            $table->integer('next_semestres')->nullable();
            $table->integer('position_semestres')->default(0);
            $table->integer('coef_semestres')->default(1);
            $table->integer('nbnc_semestres')->default(0);
            $table->integer('nbclasse_semestres')->default(0);
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
        Schema::dropIfExists('semestres');
    }
};
