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
        Schema::create('numeroautofactures', function (Blueprint $table) {
            $table->id();
            $table->string('numeroautofacture', 50);
            $table->string('facture', 50)->nullable();
            $table->timestamps();

         
        });
    }

    public function down()
    {
        Schema::dropIfExists('numeroautofactures');
    }
};
