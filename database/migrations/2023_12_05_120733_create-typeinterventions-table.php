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
        Schema::create('typeinterventions', function (Blueprint $table) {
            $table->id();
            $table->string('type', 50);
            $table->string('altkm', 50);
            $table->string('artdate', 50);
            $table->timestamps();

          
        });
    }

    public function down()
    {
        Schema::dropIfExists('typeinterventions');
    }
};
