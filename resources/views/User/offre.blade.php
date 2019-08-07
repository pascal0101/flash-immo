@extends('UserLayouts.index')

@section('content')

<form id="regForm" action="{{ route('offre') }}" method="POST" enctype="multipart/form-data">
             {{csrf_field()}}
<h1></h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">
    <div class="form-group">
                    <label style="color:black">Veuillez renseignez un nom a votre projet</label>
                    <input type="text" class="input-text" name="titre" placeholder="Nom du projet">
    </div>
                         <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Type Offre</label>
                                        <select class="selectpicker search-fields" name="typeoffre">
                                            <option>A Vendre</option>
                                            <option>A Louer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label style="color:black">Type Bien</label>
                                        <select class="selectpicker search-fields" name="typebien">
                                            <option>Appartement</option>
                                            <option>Maison</option>
                                            <option>Commercial</option>
                                            <option>Garage</option>
                                            <option>Lot</option>
                                        </select>
                                    </div>
                                </div>
                         </div>

</div>

<div class="tab">
                         <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Ville</label>
                                        <select class="selectpicker search-fields" name="ville">
                                            <option>A Vendre</option>
                                            <option>A Louer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label style="color:black">Quartier</label>
                                        <select class="selectpicker search-fields" name="quartier">
                                            <option>Appartement</option>
                                            <option>Maison</option>
                                            <option>Commercial</option>
                                            <option>Garage</option>
                                            <option>Lot</option>
                                        </select>
                                    </div>
                                </div>
                         </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Pièces</label>
                                        <select class="selectpicker search-fields" name="piece">
                                            <option>A Vendre</option>
                                            <option>A Louer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label style="color:black">Etages</label>
                                        <select class="selectpicker search-fields" name="etage">
                                            <option>Appartement</option>
                                            <option>Maison</option>
                                            <option>Commercial</option>
                                            <option>Garage</option>
                                            <option>Lot</option>
                                        </select>
                                    </div>
                                </div>
                         </div>


         <div class="row">
  <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Prix</label>
                                        <input type="number" class="form-control" name="prix" placeholder="Prix">
                                </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Surface</label>
                                        <input type="text" class="form-control" name="surface" placeholder="m²">
                                </div>
                                </div>
         </div>
</div>

<div class="tab">
            <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Etat</label>
                                        <select class="selectpicker search-fields" name="etat">
                                            <option>A Vendre</option>
                                            <option>A Louer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label style="color:black">Autre</label>
                                        <select class="selectpicker search-fields" name="autre">
                                            <option>Appartement</option>
                                            <option>Maison</option>
                                            <option>Commercial</option>
                                            <option>Garage</option>
                                            <option>Lot</option>
                                        </select>
                                    </div>
                                </div>
                         </div>



<div class="form-group">
    <label for="exampleTextarea">Description</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
  </div>
<br>
<div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Garage</label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="garage">
                    <option selected>Choisir...</option>
                    <option value="1">OUI</option>
                    <option value="2">NON</option>

                </select>
                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Meublé</label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="meuble">
                    <option selected>Choisir...</option>
                    <option value="1">OUI</option>
                    <option value="2">NON</option>
                </select>
                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Cuisine</label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="cuisine">
                    <option selected>Choisir...</option>
                    <option value="1">OUI</option>
                    <option value="2">NON</option>
                </select>
                </div>
 </div>
<br>
</div>

<div class="tab">

<div class="form-group">
                                        <label style="color:black">Adresse</label>
                                        <input type="text" class="form-control" name="adresse" placeholder="Adresse">
                                </div>
 <div class="row">

  <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Longitude</label>
                                        <input type="text" class="form-control" name="longitude" placeholder="Longitude">
                                </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Latitude</label>
                                        <input type="text" class="form-control" name="latitude" placeholder="Latitude">
                                </div>
                                </div>
         </div>
          <div class="form-group">
                                    <label style="color: black">Image</label>
                                    <input type="file" class="form-control" name="file[]" multiple>
                                </div>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-primary">Précédent</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-success">Suivant</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>
@endsection
