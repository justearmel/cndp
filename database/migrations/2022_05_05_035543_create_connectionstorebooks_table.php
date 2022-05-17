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
        Schema::create('connectionstorebooks', function (Blueprint $table) {
            $table->id('id_connectionstorebooks');
            $table->integer('idlocale_connectionstorebooks')->default(0);
            
            $table->dateTime('datestart_connectionstorebooks')->nullable();
            $table->dateTime('dateend_connectionstorebooks')->nullable();
            $table->dateTime('duration_connectionstorebooks')->nullable();
            $table->integer('isAlive_connectionstorebooks')->default(0);

            $table->string('hostname_connectionstorebooks',255)->nullable();
            $table->string('macadresse_connectionstorebooks',255)->nullable();
            $table->ipAddress('machineip_connectionstorebooks')->nullable();
            $table->string('machine_connectionstorebooks',255)->nullable();
            $table->string('country_connectionstorebooks', 255)->nullable();
            $table->string('city_connectionstorebooks', 255)->nullable();
            $table->string('localisation_connectionstorebooks', 255)->nullable();
            $table->string('timezone_connectionstorebooks',255)->nullable();
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
        Schema::dropIfExists('connectionstorebooks');
    }
};
