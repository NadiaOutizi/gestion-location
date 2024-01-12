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
        Schema::create('listemodules', function (Blueprint $table) {
            $table->id();
            $table->string('modulenom', 50);
            $table->string('category', 50)->nullable();
            $table->unsignedBigInteger('marque_id'); 
            $table->foreign('marque_id')->references('id')->on('listemarques')->onDelete('cascade');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('listemodules');
    }
};
