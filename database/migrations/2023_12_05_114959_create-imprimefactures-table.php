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
        Schema::create('imprimefactures', function (Blueprint $table) {
            $table->id();
            $table->string('vehicule', 50)->nullable();
            $table->string('matricule', 50)->nullable();
            $table->string('jours', 50)->nullable();
            $table->string('duu', 50)->nullable();
            $table->string('au', 50)->nullable();
            $table->string('prix', 50)->nullable();
            $table->string('total', 50)->nullable();
            $table->timestamps();

        
        });
    }

    public function down()
    {
        Schema::dropIfExists('imprimefactures');
    }
};
