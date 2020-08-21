<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->string('numAgence');
            $table->string('numCompte');
            $table->string('rib');
            $table->string('montant');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->bigInteger('morals_id')->unsigned();
            $table->bigInteger('physiques_id')->unsigned();
            $table->bigInteger('typecomptes_id')->unsigned();
            $table->timestamps();
            $table->foreign('morals_id')->references('id')->on('morals');
            $table->foreign('typecomptes_id')->references('id')->on('typecomptes');
            $table->foreign('physiques_id')->references('id')->on('physiques');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}
