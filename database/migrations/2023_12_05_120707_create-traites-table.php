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
        Schema::create('traites', function (Blueprint $table) {
            $table->id();
            $table->string('matricule', 50)->nullable();
            $table->date('datetrait')->nullable();
            $table->string('observation', 50)->nullable();
            $table->float('montant')->nullable();
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('traites');
    }
};
