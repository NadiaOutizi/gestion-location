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
        Schema::create('assurances', function (Blueprint $table) {
            $table->id();
            $table->string('assurance', 50);
            $table->string('numeropolice', 50)->nullable();
            $table->date('Dateoperation')->nullable();
            $table->string('heuredebut', 50)->nullable();
            $table->date('datedebut')->nullable();
            $table->integer('dureemois')->nullable();
            $table->date('datefin')->nullable();
            $table->float('prix')->nullable();
            $table->string('contactass', 50)->nullable();
            $table->string('observation', 100)->nullable();
            $table->string('matricule', 50)->nullable();
            $table->string('modele', 100)->nullable();
            $table->binary('assurancepic')->nullable(); 
            $table->binary('pjpic')->nullable(); 
            $table->string('etat', 50)->nullable();
            $table->unsignedBigInteger('matricule_id');
            $table->foreign('matricule_id')->references('id')->on('nouvellevoitures')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assurances');
    }
};
