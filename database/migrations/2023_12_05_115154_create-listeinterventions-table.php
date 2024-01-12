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
        Schema::create('listeinterventions', function (Blueprint $table) {
            $table->id();
            $table->string('typeinter', 100);
            $table->date('dateinterve')->nullable();
            $table->string('maticule', 50)->nullable();
            $table->char('vehicule', 10)->nullable();
            $table->float('cout')->nullable();
            $table->integer('kilomactule')->nullable();
            $table->integer('prochenkilo')->nullable();
            $table->binary('pj')->nullable(); 
            $table->string('observatio', 300)->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('listeinterventions');
    }
};
