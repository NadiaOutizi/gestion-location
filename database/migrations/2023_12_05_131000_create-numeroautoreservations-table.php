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
        Schema::create('numeroautoreservations', function (Blueprint $table) {
            $table->id();
            $table->string('numeroautoreserv', 50);
            $table->string('reservation', 50)->nullable();
            $table->timestamps();

        
        });
    }

    public function down()
    {
        Schema::dropIfExists('numeroautoreservations');
    }
};
