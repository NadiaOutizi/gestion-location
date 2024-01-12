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
        Schema::create('nouvellevoitures', function (Blueprint $table) {
            $table->id();
            $table->string('numerochassis', 50)->nullable();
            $table->string('matricule', 50);
            $table->string('marque', 50)->nullable();
            $table->string('module', 50)->nullable();
            $table->date('datamisecirc')->nullable();
            $table->string('nombredplace', 10)->nullable();
            $table->string('kilometrage', 50)->nullable();
            $table->float('prixlocation')->nullable();
            $table->string('colorvehicule', 50)->nullable();
            $table->string('typedecarburant', 50)->nullable();
            $table->string('carburant', 50)->nullable();
            $table->string('etatvoiture', 50)->nullable();
            $table->string('accessoir', 200)->nullable();
            $table->text('observation')->nullable();
            $table->date('Dateautorisation')->nullable();
            $table->date('Dateautorisationv')->nullable();
            $table->date('DateCarteGrise')->nullable();
            $table->date('DateCarteGrisev')->nullable();
            $table->binary('imagevoiture')->nullable();
            $table->binary('imageatourisatio')->nullable();
            $table->binary('imagerectocviste')->nullable();
            $table->binary('imageversovisite')->nullable();
            $table->timestamps();

        
        });
    }

    public function down()
    {
        Schema::dropIfExists('nouvellevoitures');
    }
};
