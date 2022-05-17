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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_notes', 255)->nullable();
            $table->integer('type_notes')->default(0);
            $table->integer('idtype_notes')->default(0);
            $table->integer('idclasse_notes')->default(0);
            $table->integer('idteacher_notes')->default(0);
            $table->integer('idmatiere_notes')->default(0);
            $table->integer('idsousmatiere_notes')->default(0);
            $table->integer('ideleve_notes')->default(0);
            $table->string('studentmat_notes', 50)->nullable();
            $table->string('codeEtab_notes', 50)->nullable();
            $table->string('sessionEtab_notes', 50)->nullable();
            $table->double('valeur_notes',2,2)->default(0);
            $table->double('coef_notes', 2,2)->default(0);
            $table->double('notecoef_notes')->default(0);
            $table->string('mention_notes', 50)->nullable();
            $table->integer('semestre_notes')->default(0);
            $table->enum('niveau_notes', ['SIXIEME', 'CINQUIEME', 'QUATRIEME','TROISIEME','SECONDE','PREMIERE','TERMINALE'])->nullable();
            $table->enum('cycle_notes', ['1ER CYCLE', '2ND CYCLE'])->nullable();
            $table->integer('statut_notes')->default(0);
            $table->integer('nc_notes')->default(1);
            $table->integer('addby_notes')->default(0);
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
        Schema::dropIfExists('notes');
    }
};
