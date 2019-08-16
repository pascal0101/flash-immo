@extends('UserLayouts.index')

@section('content')



<form id="regForm" action="{{ route('offre') }}" method="POST" enctype="multipart/form-data">
             {{csrf_field()}}
<h1></h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">
                <div class="form-group">
                    <label style="color:black">Veuillez renseignez un nom a votre projet</label>
                    <input type="text" class="form-control" name="titre" placeholder="Nom du projet">
                </div>
                <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Type Offre</label>
                                        <select class="form-control" name="typeoffre">
                                             @foreach($typeoffre as $typeoffre)
                        <option value="{{$typeoffre->id}}">{{$typeoffre->LibelleTypeOffre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm<-6">
                                    <div class="form-group">
                                        <label style="color:black">Type Bien</label>
                                        <select class="form-control" name="typebien">
                                            @foreach($typebien as $typebien)
                        <option value="{{$typebien->id}}">{{$typebien->LibelleTypeBien}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                         </div>
                         <div class="row">
             <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label for="exampleFormControlSelect1">Surface</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="surface">
                                <option value='1'>Quart de lot</option>
                                <option value='2'>Demi lot</option>
                                <option value='3'>1 lot</option>
                                <option value='4'>2 lot</option>
                                <option value='5'>3 lot</option>
                                <option value='6'>4 lot</option>
                                <option value='7'>5 lot</option>
                                <option value='8'>+5 lot</option>

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
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Ville</label>
                                        <select class="selectpicker search-fields" name="ville">
                                       @foreach($ville as $ville)
                        <option value="{{$ville->id}}">{{$ville->NomVille}}</option>
                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label style="color:black">Nombre de chambre</label>
                                        <select class="selectpicker search-fields" name="nbrechambre">
                                            <option value= '1'>1</option>
                                            <option value= '2'>2</option>
                                            <option value= '3'>3</option>
                                            <option value= '4'>4</option>
                                            <option value= '5'>5</option>
                                            <option value= '6'>6</option>
                                            <option value= '7'>7</option>
                                            <option value= '8'>8</option>
                                            <option value= '9'>9</option>
                                            <option value= '10'>10</option>
                                            <option value= '11'>+10</option>

                                        </select>
                                    </div>
                                </div>
                         </div>

                          <div class="row">
                            <div class="col-lg-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                        <label style="color:black">Salon</label>
                                        <select class="form-control" name="salon">
                                            <option value= '0'>NON</option>
                                            <option value= '1'>OUI</option>
                                        </select>
                                    </div>
                                </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                        <label style="color:black">Balcon/Terrasse</label>
                                        <select class="form-control" name="balcon">
                                            <option value= '0'>NON</option>
                                            <option value= '1'>OUI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label style="color:black">WC-Douche</label>
                                        <select class="form-control" name="wcdouche">
                                           <option value= '0'>NON</option>
                                            <option value= '1'>OUI</option>
                                        </select>
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
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                        <label style="color:black">Numero de Telephone1</label>
                                        <input type="number" class="form-control" min="0" name="num1" placeholder="Numero de Telephone1">
                                </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                        <label style="color:black">Numero de Telephone2</label>
                                        <input type="number" class="form-control" min="0" name="num2" placeholder="Numero de Telephone2">
                                </div>
                                </div>
         </div>

</div>

<div class="tab">

<div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                <div class="form-group">
                                      <label for="exampleFormControlSelect1">Garage</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="garage">
                                        <option value= '1'>OUI</option>
                                        <option value= 'O'>NON</option>

                                        </select>
                                    </div>
                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
               <div class="form-group">
                                        <label for="exampleFormControlSelect1">Meublé</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="meuble">
                       <option value= '1'>OUI</option>
                        <option value= 'O'>NON</option>
                        </select>
                                    </div>
                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                <div class="form-group">
                                       <label for="exampleFormControlSelect1">Cuisine</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="cuisine">
                            <option value= '1'>OUI</option>
                                        <option value= 'O'>NON</option>
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
  <div id="MapLocation" style="height: 350px"></div>
  <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                            <label style="color:black">Longitude</label>
                            <input type="text" class="form-control" name="Longitude" placeholder="Longitude" id="Longitude">
                    </div>
            </div>
                                <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Latitude</label>
                                        <input type="text" class="form-control" name="Latitude" placeholder="Latitude" id="Latitude">
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
