<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuartiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quartiers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NomQuartier');
            $table->unsignedBigInteger('IdVille');
            $table->foreign('IdVille')->references('id')->on('Villes')->onDelete('cascade');
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
        Schema::dropIfExists('quartiers');
    }
}
