<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Titre');
            $table->text('Description');
            $table->string('Image');
            $table->string('Etage');
            $table->string('Etat');
            $table->string('Loyer');
            $table->double('Prix', 8, 2);
            $table->integer('NombrePiece')->unsigned();
            $table->integer('Surface')->unsigned();
            $table->date('DateCreation');
            $table->date('DatePubliction');
            $table->boolean('Electricite')->default(false);
            $table->boolean('Cour')->default(false);
            $table->boolean('Garage')->default(false);
            $table->boolean('Wc')->default(false);
            $table->boolean('Douche')->default(false);
            $table->boolean('Meuble')->default(false);
            $table->boolean('Eau')->default(false);
            $table->boolean('Cuisine')->default(false);
            $table->boolean('Climatisation')->default(false);
            $table->boolean('Balcon')->default(false);
            $table->boolean('Piscine')->default(false);
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
        Schema::dropIfExists('biens');
    }
}
