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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_classes', 255)->nullable();
            $table->string('codeEtab_classes', 20)->nullable();
            $table->string('sessionEtab_classes', 20)->nullable();
            $table->integer('section_classes')->nullable();
            $table->date('datecrea_classes')->nullable();
            $table->integer('addby_classes')->default(0);
            $table->integer('statut_classes')->default(1);
            $table->enum('type_classes', ['SIXIEME', 'CINQUIEME', 'QUATRIEME','TROISIEME','SECONDE','PREMIERE','TERMINALE'])->nullable();
            $table->string('niveau_classes', 255)->nullable();
            $table->integer('cycle_classes')->nullable();
            $table->integer('principale_classes')->default(0);
            $table->enum('libellecycle_classes', ['1ER CYCLE', '2ND CYCLE'])->nullable();
            $table->integer('order_classes')->default(0);
            $table->double('montantinscription_classes', 8,2)->nullable();
            $table->double('montantreinscription_classes', 8,2)->nullable();
            $table->double('montantscolarite_classes', 8,2)->nullable();
            $table->double('montantscolariteaff_classes', 8,2)->nullable();
            $table->integer('nbinscrit_classes')->default(0);
            $table->integer('nbsortant_classes')->default(0);
            $table->integer('nbtransfert_classes')->default(0);
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
        Schema::dropIfExists('classes');
    }
};
