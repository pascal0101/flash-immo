<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
<!-- Load Leaflet from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
  integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
  crossorigin=""></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@2.3.0/dist/esri-leaflet.js"
  integrity="sha512-1tScwpjXwwnm6tTva0l0/ZgM3rYNbdyMj5q6RSQMbNX6EUMhYDE3pMRGZaT41zHEvLoWEK7qFEJmZDOoDMU7/Q=="
  crossorigin=""></script>


  <!-- Load Esri Leaflet Geocoder from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.2.14/dist/esri-leaflet-geocoder.css"
    integrity="sha512-v5YmWLm8KqAAmg5808pETiccEohtt8rPVMGQ1jA6jqkWVydV5Cuz3nJ9fQ7ittSxvuqsvI9RSGfVoKPaAJZ/AQ=="
    crossorigin="">
  <script src="https://unpkg.com/esri-leaflet-geocoder@2.2.14/dist/esri-leaflet-geocoder.js"
    integrity="sha512-uK5jVwR81KVTGe8KpJa1QIN4n60TsSV8+DPbL5wWlYQvb0/nYNgSOg9dZG6ViQhwx/gaMszuWllTemL+K+IXjg=="
    crossorigin=""></script>


</head>
<body onload="initialize()">

<div id="mapid"  style="width: 640px; height: 480px;"></div>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
   <input type="text"  placeholder="Longitude" id="Longitude"/>


    <input type="text" placeholder="Latitude" id="Latitude">
    <button id="myLocation" class="mylocation">Ma position</button>
<script>

    function initialize() {
        console.log('ok');
        var mymap = L.map("mapid").setView([7.528691, 1.130505], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(mymap);


        var marker = L.marker([7.528691, 1.130505], {
            draggable: "true"
        });

            var searchControl = L.esri.Geocoding.geosearch().addTo(mymap);

            var results = L.layerGroup().addTo(mymap);

            searchControl.on('results', function (data) {
                results.clearLayers();
                for (var i = data.results.length - 1; i >= 0; i--) {
                  var marker = L.marker(data.results[i].latlng,{draggable: "true"});
                results.addLayer(marker);
                }
            });

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
</html>
