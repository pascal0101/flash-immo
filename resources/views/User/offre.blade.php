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
                                        <label style="color:black">Nombre de chambre</label>
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
                            <div class="col-lg-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                        <label style="color:black">Salon</label>
                                        <select class="selectpicker search-fields" name="piece">
                                            <option>A Vendre</option>
                                            <option>A Louer</option>
                                        </select>
                                    </div>
                                </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                        <label style="color:black">Balcon/Terrasse</label>
                                        <select class="selectpicker search-fields" name="piece">
                                            <option>A Vendre</option>
                                            <option>A Louer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label style="color:black">WC-Douche</label>
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
                                        <label for="exampleFormControlSelect1">Surface</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                                </div>
                                </div>
  <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Prix</label>
                                        <input type="number" class="form-control" name="prix" placeholder="Prix">
                                </div>
                                </div>

         </div>
</div>

<div class="tab">

<div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                <div class="form-group">
                                      <label for="exampleFormControlSelect1">Garage</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                        <option>OUI</option>
                                        <option>NON</option>

                                        </select>
                                    </div>
                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
               <div class="form-group">
                                        <label for="exampleFormControlSelect1">Meublé</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>OUI</option>
                        <option>NON</option>
                        </select>
                                    </div>
                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                <div class="form-group">
                                       <label for="exampleFormControlSelect1">Cuisine</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                             <option>OUI</option>
                                        <option>NON</option>
                            </select>
                                    </div>
                </div>
 </div>


<div class="form-group">
    <label for="exampleTextarea">Description</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
  </div>

<div class="form-group">
                                        <label style="color:black">Adresse</label>
                                        <input type="text" class="form-control" name="adresse" placeholder="Adresse">
                                </div>
</div>

<div class="tab">

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

            <div class="row">

  <div class="col-lg-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                        <label style="color:black">Email</label>
                                        <input type="text" class="form-control" name="longitude" placeholder="Longitude">
                                </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                        <label style="color:black">Numero de Telephone1</label>
                                        <input type="text" class="form-control" name="latitude" placeholder="Latitude">
                                </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                        <label style="color:black">Numero de Telephone1</label>
                                        <input type="text" class="form-control" name="latitude" placeholder="Latitude">
                                </div>
                                </div>
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
