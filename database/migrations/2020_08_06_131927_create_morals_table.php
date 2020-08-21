<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('morals', function (Blueprint $table) {
            $table->id();
            $table->string('nomEmpl');
            $table->string('ninea');
            $table->string('rc');
            $table->string('raisonSocial');
            $table->string('adressEmpl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('morals');
    }
}
