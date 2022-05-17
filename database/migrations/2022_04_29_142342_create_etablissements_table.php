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
        Schema::create('etablissements', function (Blueprint $table) {
            $table->id();
            $table->string('code_etab', 50)->nullable();
            $table->string('libelle_etab', 255)->nullable();
            $table->string('tel_etab', 50)->nullable();
            $table->string('tel1_etab', 50)->nullable();
            $table->string('email_etab', 50)->nullable();
            $table->string('adresse_etab', 255)->nullable();
            $table->string('logo_etab', 255)->nullable();
            $table->integer('pays_etab')->default(1);
            $table->integer('type_etab')->default(5);
            $table->string('mixte_etab', 255)->nullable();
            $table->integer('cantine_etab')->default(0);
            $table->integer('transport_etab')->default(0);
            $table->string('agenda_etab', 255)->nullable();
            $table->string('sigle_etab', 255)->nullable();
            $table->integer('groupestate_etab')->default(1);
            $table->integer('groupeid_etab')->default(1);
            $table->string('groupename_etab', 255)->nullable();
            $table->string('libelle1_etab', 255)->nullable();
            $table->string('libelle2_etab', 255)->nullable();
            $table->string('primaire_etab', 255)->nullable();
            $table->string('directeur_etab', 255)->nullable();
            $table->string('ministere_etab', 255)->nullable();
            $table->string('dren_etab', 255)->nullable();
            $table->integer('addby_etab')->default(0);
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
        Schema::dropIfExists('etablissements');
    }
};
