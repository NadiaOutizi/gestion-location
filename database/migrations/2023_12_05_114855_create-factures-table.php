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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('numerofacture', 50);
            $table->date('datefacture')->nullable();
            $table->string('client', 50)->nullable();
            $table->string('lieufact', 50)->nullable();
            $table->string('doit', 50)->nullable();
            $table->string('ice', 50)->nullable();
            $table->string('nombrecontrat', 50)->nullable();
            $table->string('montantht', 50)->nullable();
            $table->string('tva', 50)->nullable();
            $table->string('montantttc', 50)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
