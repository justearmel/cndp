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
        Schema::table('classes', function (Blueprint $table) {
            $table->renameColumn('id', 'id_classes');
            $table->integer('nbfilles_classes')->after('nbtransfert_classes')->default(0);
            $table->integer('nbgarcons_classes')->after('nbfilles_classes')->default(0);
            $table->integer('nbinternes_classes')->after('nbgarcons_classes')->default(0);
            $table->integer('nbexternes_classes')->after('nbinternes_classes')->default(0);
            $table->integer('nbaffecte_classes')->after('nbexternes_classes')->default(0);
            $table->integer('nbnonaffecte_classes')->after('nbaffecte_classes')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classes', function (Blueprint $table) {
            //
        });
    }
};
