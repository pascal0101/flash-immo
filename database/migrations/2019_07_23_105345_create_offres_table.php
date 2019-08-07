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
            $table->string('Adresse');
            $table->string('Email');
            $table->integer('Numero1')->unsigned();
            $table->integer('Numero2')->unsigned();
            $table->double('Prix');
            $table->integer('NombreChambre')->unsigned();
            $table->integer('Surface')->unsigned();
            $table->boolean('Garage')->default(false);
            $table->boolean('Meuble')->default(false);
            $table->boolean('Cuisine')->default(false);
            $table->boolean('Balcon')->default(false);
            $table->boolean('Salon')->default(false);
            $table->boolean('WcDouche')->default(false);
            $table->unsignedBigInteger('IdVille');
            $table->foreign('IdVille')->references('id')->on('Villes')->onDelete('cascade');
            $table->unsignedBigInteger('IdTypeOffre');
            $table->foreign('IdTypeOffre')->references('id')->on('Type_Offres')->onDelete('cascade');
            $table->unsignedBigInteger('IdTypeBien');
            $table->foreign('IdTypeBien')->references('id')->on('Type_Biens')->onDelete('cascade');
            $table->unsignedBigInteger('IdAgenceImmobiliere');
            $table->foreign('IdAgenceImmobiliere')->references('id')->on('Agence_Immobilieres')->onDelete('cascade');
            $table->unsignedBigInteger('IdUtilisateur');
            $table->foreign('IdUtilisateur')->references('id')->on('Utilisateurs')->onDelete('cascade');
            $table->boolean('Publier')->default(false);
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
