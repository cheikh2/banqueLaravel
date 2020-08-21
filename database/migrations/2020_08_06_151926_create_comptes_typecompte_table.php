<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTypecompteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes_typecompte', function (Blueprint $table) {
            $table->bigInteger('comptes_id')->unsigned();
            $table->bigInteger('typecompte_id')->unsigned();
            $table->foreign('comptes_id')->references('id')->on('comptes');
            $table->foreign('typecompte_id')->references('id')->on('typecomptes');
            $table->primary(['typecompte_id', 'comptes_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes_typecompte');
    }
}
