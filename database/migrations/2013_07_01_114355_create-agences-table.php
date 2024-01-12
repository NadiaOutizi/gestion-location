<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agences', function (Blueprint $table) {
            $table->id();
            $table->string('Agence', 80);
            $table->text('Adresse');
            $table->string('Ville', 80)->nullable();
            $table->string('CodeP', 80)->nullable();
            $table->string('GSM', 80);
            $table->string('gms', 80)->nullable();
            $table->string('telefix', 80)->nullable();
            $table->string('fax', 80)->nullable();
            $table->string('Email', 80)->nullable();
            $table->string('Nomfran', 80)->nullable();
            $table->string('prenomFrance', 80)->nullable();
            $table->string('cine', 50)->nullable();
            $table->string('telephone', 50)->nullable();
            $table->binary('logo')->nullable(); 
            $table->string('patent', 50);
            $table->string('rc', 50)->nullable();
            $table->string('iff', 50)->nullable();
            $table->string('ice', 50)->nullable();
            $table->string('cnss', 50)->nullable();
            $table->binary('condition')->nullable(); 
            $table->string('Bancaire', 200)->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agences');
    }
};
