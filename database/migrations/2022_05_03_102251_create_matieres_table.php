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
        Schema::create('matieres', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_mat', 255)->nullable();
            $table->float('coef_mat',2,2)->default(0);
            $table->float('coef1_mat', 2,2)->default(0);
            $table->integer('idclasse_mat')->default(1);
            $table->integer('idteacher_mat')->default(1);
            $table->string('codeEtab_mat', 50)->nullable();
            $table->string('sessionEtab_mat', 50)->nullable();
            $table->enum('niveau_mat', ['SIXIEME', 'CINQUIEME', 'QUATRIEME','TROISIEME','SECONDE','PREMIERE','TERMINALE'])->nullable();
            $table->enum('cycle_mat', ['1ER CYCLE', '2ND CYCLE'])->nullable();
            $table->integer('facultatif_mat')->default(0);
            $table->enum('bilantype_mat', ['AUTRES', 'LETTRES','SCIENCES'])->nullable();
            $table->string('bilanplace_mat', 50)->nullable();
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
        Schema::dropIfExists('matieres');
    }
};
