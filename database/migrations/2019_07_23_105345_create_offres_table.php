<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Titre');
            $table->text('Description');
            $table->string('Image');
            $table->string('Etage');
            $table->string('Etat');
            $table->double('Prix', 8, 2);
            $table->integer('NombrePiece')->unsigned();
            $table->integer('Surface')->unsigned();
            $table->boolean('Garage')->default(false);
            $table->boolean('Meuble')->default(false);
            $table->boolean('Cuisine')->default(false);
            $table->boolean('Balcon')->default(false);
            $table->boolean('Publier')->default(false);
            $table->unsignedBigInteger('IdQuartier');
            $table->foreign('IdQuartier')->references('id')->on('Quartiers')->onDelete('cascade');
            $table->unsignedBigInteger('IdTypeOffre');
            $table->foreign('IdTypeOffre')->references('id')->on('TypeOffres')->onDelete('cascade');
            $table->unsignedBigInteger('IdTypeBien');
            $table->foreign('IdTypeBien')->references('id')->on('TypeBiens')->onDelete('cascade');
            $table->unsignedBigInteger('IdAgenceImmobiliere');
            $table->foreign('IdAgenceImmobiliere')->references('id')->on('AgenceImmobilieres')->onDelete('cascade');
            $table->unsignedBigInteger('IdUtilisateur');
            $table->foreign('IdUtilisateur')->references('id')->on('Utilisateurs')->onDelete('cascade');
            $table->date('DateCreation');
            $table->date('DatePubliction');
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
        Schema::dropIfExists('offres');
    }
}
