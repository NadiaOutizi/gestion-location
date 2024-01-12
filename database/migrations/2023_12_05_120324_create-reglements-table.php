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
        Schema::create('reglements', function (Blueprint $table) {
            $table->id();
            $table->string('numeroreglemnt', 50);
            $table->string('dateregelement', 50);
            $table->string('Regler', 50);
            $table->string('Regelement', 50);
            $table->string('client', 50);
            $table->string('montantrest', 50);
            $table->string('typepaiement', 50);
            $table->string('Reglee', 50);
            $table->binary('pj')->nullable();
            $table->timestamps();

      
        });
    }

    public function down()
    {
        Schema::dropIfExists('reglements');
    }
};
