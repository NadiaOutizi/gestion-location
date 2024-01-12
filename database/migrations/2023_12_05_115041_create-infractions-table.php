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
        Schema::create('infractions', function (Blueprint $table) {
            $table->id();
            $table->string('numeroinfra', 50);
            $table->string('matricule', 50)->nullable();
            $table->string('vehicule', 50)->nullable();
            $table->date('dateinfraction')->nullable();
            $table->string('heure', 50)->nullable();
            $table->string('min', 50)->nullable();
            $table->string('faita', 50)->nullable();
            $table->date('faitele')->nullable();
            $table->string('client', 50)->nullable();
            $table->string('numerodossier', 50)->nullable();
            $table->string('cin', 50)->nullable();
            $table->string('permi', 50)->nullable();
            $table->string('passport', 50)->nullable();
            $table->string('adresse', 100)->nullable();
            $table->string('telephone', 50)->nullable();
            $table->string('gsm2', 50)->nullable();
            $table->binary('pj')->nullable(); 
            $table->timestamps();

          
        });
    }

    public function down()
    {
        Schema::dropIfExists('infractions');
    }
};
