<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('numreservation', 50);
            $table->string('cin', 50)->nullable();
            $table->string('client', 50)->nullable();
            $table->string('valcin', 50)->nullable();
            $table->string('permi', 50)->nullable();
            $table->string('valpermi', 50)->nullable();
            $table->date('datereservation')->nullable();
            $table->date('datedebut')->nullable();
            $table->string('etat', 50)->nullable();
            $table->string('jours', 50)->nullable();
            $table->date('datefin')->nullable();
            $table->string('matricuule', 50)->nullable();
            $table->string('voiture', 50)->nullable();
            $table->float('prixjourne')->nullable();
            $table->float('total')->nullable();
            $table->float('avance')->nullable();
            $table->string('note', 200)->nullable();
            $table->string('DCIN', 200)->nullable();
            $table->string('dpermi', 200)->nullable();
            $table->string('dpasspor', 200)->nullable();
            $table->string('adresse', 200)->nullable();
            $table->string('telephone', 200)->nullable();
            $table->string('passport', 200)->nullable();
            $table->string('valpass', 50)->nullable();
            $table->timestamps();

           
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
