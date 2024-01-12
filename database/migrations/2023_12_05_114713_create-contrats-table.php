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
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->string('numcontrat', 50);
            $table->date('datecontrat')->nullable();
            $table->string('client', 100)->nullable();
            $table->string('cin', 50)->nullable();
            $table->string('valcin', 50)->nullable();
            $table->string('permi', 50)->nullable();
            $table->string('valpermi', 50)->nullable();
            $table->date('du')->nullable();
            $table->date('au')->nullable();
            $table->string('jours', 50)->nullable();
            $table->string('lieulivr', 50)->nullable();
            $table->string('lieurecu', 50)->nullable();
            $table->string('lieucontrat', 50)->nullable();
            $table->string('matricule', 50)->nullable();
            $table->string('vehicule', 50)->nullable();
            $table->string('prix', 50)->nullable();
            $table->string('kmdepart', 50)->nullable();
            $table->string('carbu', 50)->nullable();
            $table->string('typecarbu', 50)->nullable();
            $table->string('typepayment', 50)->nullable();
            $table->string('garentie', 50)->nullable();
            $table->string('montant', 50)->nullable();
            $table->string('etat', 50)->nullable();
            $table->string('cliente', 50)->nullable();
            $table->string('cinvale', 50)->nullable();
            $table->string('permiee', 50)->nullable();
            $table->string('permieeval', 50)->nullable();
            $table->string('cincondu', 50)->nullable();
            $table->string('equipement', 50)->nullable();
            $table->binary('DCIN')->nullable(); 
            $table->binary('dpermi')->nullable();
            $table->binary('dpasspor')->nullable();
            $table->string('adresse', 200)->nullable();
            $table->string('telephone', 200)->nullable();
            $table->string('passport', 200)->nullable();
            $table->string('valpass', 50)->nullable();
            $table->binary('DCINe')->nullable();
            $table->binary('dpermie')->nullable();
            $table->binary('dpasspore')->nullable();
            $table->string('adressee', 200)->nullable();
            $table->string('telephonee', 200)->nullable();
            $table->string('passporte', 200)->nullable();
            $table->string('valpasse', 50)->nullable();
            $table->string('heure', 50)->nullable();
            $table->string('min', 50)->nullable();
            $table->string('sousloa', 100)->nullable();
            $table->string('matriculesous', 50)->nullable();
            $table->string('Souslocaetat', 50)->nullable();
            $table->string('datehm', 50)->nullable();
            $table->string('av', 50)->nullable();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('matricule_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('matricule_id')->references('id')->on('nouvellevoitures')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('contrats');
    }
};
