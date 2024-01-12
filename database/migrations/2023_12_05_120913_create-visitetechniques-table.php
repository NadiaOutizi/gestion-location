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
        Schema::create('visitetechniques', function (Blueprint $table) {
            $table->id();
            $table->string('centre', 100);
            $table->string('identicontrol', 50)->nullable();
            $table->string('nauturisation', 50)->nullable();
            $table->date('datevisite');
            $table->integer('duree');
            $table->date('datefin');
            $table->float('prix');
            $table->string('contact', 50)->nullable();
            $table->string('observation', 100)->nullable();
            $table->string('matricule', 50);
            $table->string('module', 50)->nullable();
            $table->binary('pj')->nullable();
            $table->binary('visitetechniquepic')->nullable();
            $table->string('etat', 50)->nullable();
            $table->unsignedBigInteger('matricule_id');
            $table->foreign('matricule_id')->references('id')->on('nouvellevoitures')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('visitetechniques');
    }
};
