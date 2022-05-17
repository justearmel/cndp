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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('idclasse_inscriptions')->default(0);
            $table->integer('ideleve_inscriptions')->default(0);
            $table->string('studentmat_inscriptions', 20)->nullable();
            $table->date('date_inscriptions')->nullable();
            $table->integer('age_inscriptions')->default(0);
            $table->integer('nais_inscriptions')->nullable();
            $table->string('sessionEtab_inscriptions', 20)->nullable();
            $table->string('codeEtab_inscriptions', 50)->nullable();
            $table->string('type_inscriptions', 255)->nullable();
            $table->integer('solder_inscriptions')->default(0);
            $table->integer('statut_inscriptions',)->default(1);
            $table->integer('sortant_inscriptions')->default(0);
            $table->string('previouschool_inscriptions', 20)->nullable();
            
            $table->enum('niveau_inscriptions', ['SIXIEME', 'CINQUIEME', 'QUATRIEME','TROISIEME','SECONDE','PREMIERE','TERMINALE'])->nullable();
            $table->enum('cycle_inscriptions', ['1ER CYCLE', '2ND CYCLE'])->nullable();

            $table->string('lv2_inscriptions', 3)->nullable();
            $table->integer('levelup_inscriptions')->default(0);
            $table->integer('dispense_inscriptions')->default(0);
            $table->integer('addby_inscriptions')->default(0);
            $table->enum('resultat_inscriptions', ['ADMIS', 'REFUSER', 'RENVOYER'])->nullable();
            $table->double('moyenneannuel_inscriptions',2, 2)->nullable();
            $table->integer('rangannuel_inscriptions')->default(0);
            $table->string('mentionannuel_inscriptions', 255)->nullable();
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
        Schema::dropIfExists('inscriptions');
    }
};
