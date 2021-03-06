@extends('UserLayouts.index')

@section('content')

<body onload="initialize()">

<form id="regForm" method="POST" action="{{ route('modoffre',[$offre->id]) }}" enctype="multipart/form-data">
             {{csrf_field()}}
<h1></h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">
                <div class="form-group {{$errors->has('titre') ? 'has-error' : ''}}">
                    <label style="color:black">Titre annonce</label>
                     <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input type="text" class="form-control" name="titre" placeholder="Titre annonce" value="{{$offre ->Titre}}">

                </div>
                 {!!$errors->first('titre','<span class="help-block">:message</span>')!!}
                </div>
                <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Type Offre</label>

                             <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-tasks"></i></span>
                                        <select class="form-control" name="typeoffre">
                                             @foreach($typeoffre as $typeoffre)
                        <option value="{{$typeoffre->id}}">{{$typeoffre->LibelleTypeOffre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label style="color:black">Type Bien</label>
                    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-tasks"></i></span>
                                        <select class="form-control" name="typebien">
                                            @foreach($typebien as $typebien)
                        <option value="{{$typebien->id}}">{{$typebien->LibelleTypeBien}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                </div>
                         </div>
                         <div class="row">
             <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label for="exampleFormControlSelect1">Surface</label>
                                        <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
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
                                </div>
  <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Prix</label>
                                        <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                        <input type="number" min="0" class="form-control" name="prix" placeholder="Prix" value="{{$offre ->Prix}}">
                                </div>
                                </div>
  </div>

         </div>

</div>

<div class="tab">
                         <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Ville</label>
                                        <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                        <select class="selectpicker search-fields" name="ville">
                                       @foreach($ville as $ville)
                        <option value="{{$ville->id}}">{{$ville->NomVille}}</option>
                              @endforeach
                                        </select>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label style="color:black">Nombre de chambre</label>
                                      <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
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
                         </div>
                          <div class="row">
                            <div class="col-lg-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                        <label style="color:black">Salon</label>
                                           <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <select class="form-control" name="salon">
                                            <option value= '0'>NON</option>
                                            <option value= '1'>OUI</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="col-lg-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                        <label style="color:black">Balcon/Terrasse</label>
                                           <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-inbox"></i></span>
                                        <select class="form-control" name="balcon">
                                            <option value= '0'>NON</option>
                                            <option value= '1'>OUI</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label style="color:black">WC-Douche</label>
                                       <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-inbox"></i></span>
                                        <select class="form-control" name="wcdouche">
                                           <option value= '0'>NON</option>
                                            <option value= '1'>OUI</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                     </div>

             <div class="form-group">
                                    <label style="color: black">Image</label>
                                       <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                                    <input type="file" class="form-control" name="file[]" multiple>
                                </div>
             </div>
            <div class="row">

  <div class="col-md-6 col-sm-6">
                                <div class="form-group  {{$errors->has('email') ? 'has-error' : ''}}">
                                        <label style="color:black">Email</label>
                                       <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{$offre ->Email}}">
                                </div>
                                  {!!$errors->first('email','<span class="help-block">:message</span>')!!}
                                </div>
  </div>
                                <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label style="color:black">Numero de Telephone</label>
                                           <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input type="number" class="form-control" min="0" name="telephone" placeholder="Numero de Telephone" value="{{$offre ->Telephone}}">
                                </div>
                                </div>
                                </div>

         </div>

</div>

<div class="tab">

<div class="row">
                <div class="col-lg-4 col-sm-4 col-xs-12">
                <div class="form-group">
                                      <label for="exampleFormControlSelect1">Garage</label>
                                       <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
                                        <select class="form-control" id="exampleFormControlSelect1" name="garage">
                                        <option value= '1'>OUI</option>
                                        <option value= 'O'>NON</option>

                                        </select>
                                    </div>
                </div>
                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
               <div class="form-group">
                                        <label for="exampleFormControlSelect1">Meublé</label>
                                           <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        <select class="form-control" id="exampleFormControlSelect1" name="meuble">
                       <option value= '1'>OUI</option>
                        <option value= 'O'>NON</option>
                        </select>
                                    </div>
               </div>
                </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                <div class="form-group">
                                       <label for="exampleFormControlSelect1">Cuisine</label>
                                          <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-folder-close"></i></span>
                            <select class="form-control" id="exampleFormControlSelect1" name="cuisine">
                            <option value= '1'>OUI</option>
                                        <option value= 'O'>NON</option>
                            </select>
                                    </div>
                </div>
                </div>
 </div>


<div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
    <label for="exampleTextarea">Description</label>
       <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
 <textarea class="form-control" id="exampleTextarea" rows="3" name="description" value="{{$offre ->Description}}"></textarea>
  </div>
  {!!$errors->first('description','<span class="help-block">:message</span>')!!}
</div>

<div class="form-group">
                        <label style="color:black">Adresse</label>
                           <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input type="text" class="form-control" name="adresse" placeholder="Adresse" value="{{$offre ->Adresse}}">
                </div>
</div>
</div>

<div class="tab">

 <div class="row">
  <div id="mapid" style="width: 900px; height: 480px;"></div>
        <div class="col-lg-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <br>
        <button class="btn btn-warning" id="myLocation" class="mylocation" type="button"><i class="fa fa-location-arrow"></i> Ma position</button>
    </div>
      </div>
  <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                            <label style="color:black">Longitude</label>
                               <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <input type="text" class="form-control" name="Longitude" placeholder="Longitude" id="Longitude"  value="{{$offre ->Longitude}}">
                    </div>
                    </div>
            </div>
                                <div class="col-lg-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                        <label style="color:black">Latitude</label>
                                           <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                        <input type="text" class="form-control" name="Latitude" placeholder="Latitude" id="Latitude" value="{{$offre ->Latitude}}">
                                </div>
                                </div>
                                </div>
         </div>

</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Précédent</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i> Suivant</button>
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
<script>

    function initialize() {
        console.log('ok');
    var mymap = L.map("mapid").setView([6.212069, 1.1875334], 13);

    var osmLayer = L.tileLayer("http://{s}.tile.osm.org/{z}/{x}/{y}.png", {
        attribution: "© OpenStreetMap contributors",
        maxZoom: 19
    });

    mymap.addLayer(osmLayer);

    var marker = L.marker([6.212069, 1.1875334], {
            draggable: "true"
        });
    marker.addTo(mymap);

        function currentLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((function (position) {
                //alert(position.coords.latitude)
                document.getElementById("Latitude").value=position.coords.latitude;
                document.getElementById("Longitude").value=position.coords.longitude;
                var marker = L.marker([position.coords.latitude, position.coords.longitude], {
            draggable: "true"
        });
                //marker.bindPopup("Ma position :<br> Latitude : " + position.coords.latitude + ',<br>Longitude ' + position.coords.longitude).openPopup();
            }));
        } else {
            alert("La géolocalisation n'est pas supportée par ce navigateur.");
        }
}
//marker.bindPopup("Ma position :<br> Latitude : " + position.coords.latitude + ',<br>Longitude ' + position.coords.longitude).openPopup();
$('#myLocation').click(function (e) {
    currentLocation();
});
marker.on("dragend", function(event) {
        var position = marker.getLatLng();
        marker
                        .setLatLng(position, {
                            draggable: "true"
                        })
                        .bindPopup(position)
                        .update();
                    $("#Latitude").val(position.lat);
                    $("#Longitude")
                        .val(position.lng)
                        .keyup();
                });

                $("#Latitude, #Longitude").change(function() {
                    var position = [
                        parseInt($("#Latitude").val()),
                        parseInt($("#Longitude").val())
                    ];
                    marker
                        .setLatLng(position, {
                            draggable: "true"
                        })
                        .bindPopup(position)
                        .update();
                    mymap.panTo(position);
                });

    mymap.addLayer(marker);
}
</script>
</body>
@endsection
