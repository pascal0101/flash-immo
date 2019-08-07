@extends('UserLayouts.index1')

@section('content')
<!-- Submit Property start -->
<div class="content-area-7 submit-property">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
            <div class="col-md-12">
                <div class="submit-address">
    <form method="POST"  action="{{ route('upload') }}" enctype="multipart/form-data">
                {{csrf_field()}}
                        <div class="main-title-2">
                            <h1 style="color: black"><span >Information</span> de  Base</h1>
                        </div>
                        <div class="search-contents-sidebar mb-30">
                            <div class="form-group">
                                <label style="color:black">Titre</label>
                                <input type="text" class="input-text" name="titre" placeholder="Titre">
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
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label style="color:black">Prix</label>
                                        <input type="text" class="input-text" name="prix" placeholder="FCFA">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label style="color:black">Surface</label>
                                        <input type="text" class="input-text" name="surface" placeholder="m²">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label style="color:black">Pièces</label>
                                        <select class="selectpicker search-fields" name="nombrepiece">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label style="color:black">Etage</label>
                                        <select class="selectpicker search-fields" name="etage">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="main-title-2">
                            <h1><span style="color: black">Emplacement</span></h1>
                        </div>
                        <div class="row mb-30 ">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label style="color:black">Adresse</label>
                                    <input type="text" class="input-text" name="adresse"  placeholder="Adresse">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label style="color:black">Ville</label>
                                    <select class="selectpicker search-fields" name="ville" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Choose City</option>
                                        <option>New York</option>
                                        <option>Los Angeles</option>
                                        <option>Chicago</option>
                                        <option>Brooklyn</option>
                                        <option>Queens</option>
                                        <option>Houston</option>
                                        <option>Manhattan</option>
                                        <option>Philadelphia</option>
                                        <option>Phoenix</option>
                                        <option>San Antonio</option>
                                        <option>Bronx</option>
                                        <option>San Diego</option>
                                        <option>Dallas</option>
                                        <option>San Jose</option>
                                    </select>
                                </div>
                            </div>
                             <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label style="color:black">Quartier</label>
                                    <select class="selectpicker search-fields" name="quartier" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Choose City</option>
                                        <option>New York</option>
                                        <option>Los Angeles</option>
                                        <option>Chicago</option>
                                        <option>Brooklyn</option>

                                    </select>
                                </div>
                            </div>
                        </div>



                    <div class="main-title-2">
                            <h1><span>Information détaillé</span> </h1>
                        </div>

                        <div class="row mb-30">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="color:black">Description</label>
                                    <textarea class="input-text" name="description" placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label style="color:black">Etat <span></span></label>
                                    <select class="selectpicker search-fields" name="etat">
                                        <option>Neuf</option>
                                        <option>Rennové</option>
                                        <option>Ancien</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">

                                    <div class="form-group">
                                        <label style="color:black">Nom Agence Immobilière</label>
                                        <input type="text" class="input-text" name="agence" placeholder="PAS immo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label style="color:black">Wc + Douche</label>
                                    <select class="selectpicker search-fields" name="wcdouche">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">

                                <div class="row">
                                    <div class="col-lg-4 col-sm-4 col-xs-12">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox1" type="checkbox" name="garage" value="garage">
                                            <label for="checkbox1">
                                                Garage
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-sm-4 col-xs-12">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox4" type="checkbox" name="meuble" value="meuble">
                                            <label for="checkbox4">
                                                Meublé
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-sm-4 col-xs-12">
                                        <div class="checkbox checkbox-theme checkbox-circle">
                                            <input id="checkbox7" type="checkbox" name="cuisine" value="cuisine">
                                            <label for="checkbox7">
                                                Cuisine
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-title-2">
                            <h1><span style="color:black">Contact Details</span> </h1>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label style="color: black">Nom</label>
                                    <input type="text" class="input-text" name="nom" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label style="color: black">Email</label>
                                    <input type="email" class="input-text" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label style="color: black">Numero de Télephone</label>
                                    <input type="text" class="input-text" name="numtelephone"  placeholder="Phone">
                                </div>
                            </div>



                                <div class="form-group">
                                    <label style="color: black">Image</label>
                                    <input type="file" class="input-text" name="file[]" multiple>
                                </div>




                            <div class="col-md-12">
                                <button type="submit" class="btn button-md button-theme"><i class="fa fa-check"></i>Enregistrer</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
