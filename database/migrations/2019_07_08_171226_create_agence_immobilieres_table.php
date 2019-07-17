<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenceImmobilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agence_immobilieres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NomAgence');
            $table->string('NIF');
            $table->string('Logo');
            $table->text('Description');
            $table->integer('Contact')->unsigned();
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
        Schema::dropIfExists('agence_immobilieres');
    }
}
