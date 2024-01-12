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
        Schema::create('numeroautocontrats', function (Blueprint $table) {
            $table->id();
            $table->string('numeroautocontrat', 50);
            $table->string('contrat', 50)->nullable();
            $table->timestamps();

         
        });
    }

    public function down()
    {
        Schema::dropIfExists('numeroautocontrats');
    }
};
