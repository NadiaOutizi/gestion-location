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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('cin', 50);
            $table->string('civilite', 50)->nullable();
            $table->string('nationalite', 50)->nullable();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->string('permi', 50);
            $table->string('passeport', 50)->nullable();
            $table->text('adresse')->nullable();
            $table->string('ville', 50)->nullable();
            $table->string('codepostal', 50)->nullable();
            $table->string('tele', 50);
            $table->string('telephone', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->text('remarque')->nullable();
            $table->string('datecin', 50);
            $table->string('datepermi', 50);
            $table->string('datepassport', 50)->nullable();
            $table->binary('rectocin')->nullable(); 
            $table->binary('versocin')->nullable();
            $table->binary('rectopermi')->nullable();
            $table->binary('versopermi')->nullable();
            $table->binary('rectopassport')->nullable();
            $table->binary('versopassport')->nullable();
            $table->string('listenoir', 50)->nullable();
            $table->string('delivrecin', 50)->nullable();
            $table->string('delivrepermi', 50)->nullable();
            $table->string('delivrepassporte', 50)->nullable();
            $table->string('doit', 50)->nullable();
            $table->string('ice', 50)->nullable();
            $table->string('typeclient', 50)->nullable();
            $table->string('numerodoss', 50)->nullable();
            $table->timestamps();

       
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
