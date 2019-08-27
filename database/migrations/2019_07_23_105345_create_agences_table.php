<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NomAgence');
            $table->string('NIF');
            $table->string('Logo');
            $table->text('Description');
            $table->string('Contact1');
            $table->string('Email');
            $table->string('SiteWeb');
            $table->string('Adresse');
            $table->string('Contact2');
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
        Schema::dropIfExists('agences');
    }
}
