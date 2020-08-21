<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physiques', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('adress');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('sexe');
            $table->string('profession');
            $table->string('cni');
            $table->string('salaire');
            $table->bigInteger('morals_id')->unsigned();
            $table->timestamps();
            $table->foreign('morals_id')->references('id')->on('morals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('physiques');
    }
}
