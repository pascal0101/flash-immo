<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
   <style>
   body {
    padding: 50px;
    font: 14px "Lucida Grande", Helvetica, Arial, sans-serif;
    min-width: 200px;
    height: 100%;
    margin: 0;
    padding: 0;
}

a {
    color: #00B7FF;
}

#map {
    position: absolute;
    left: 50%;
    top: 30%;
    transform: translate(-50%, -30%);
    width: 80%;
    height: 60%;
    min-height: 40%;
}
.mylocation {
    position: absolute;
    bottom: 10%;
    left: 50%;
    transform: translate(-50%, 10%);
    -webkit-border-radius: 7;
    -moz-border-radius: 7;
    border-radius: 7px;
    font-family: Arial;
    color: #1f628d;
    font-size: 30px;
    background: #ffffff;
    padding: 10px 20px 10px 20px;
    border: solid #1f628d 2px;
    text-decoration: none;
}

.mylocation:hover {
    background: #1f628d;
    text-decoration: none;
    color: #ffffff;
    border: none;
}
   </style>
</head>
<body>

<div id="map"></div>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
    <button id="myLocation" class="mylocation">Ma position</button>

<script>
var map = L.map('map', {
            center: ['6.212069', '1.1875334'],
            zoom: 11
        });
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
   attribution: 'Données de la carte &copy; <a href="http://www.openstreetmap.org/#map=5/51.500/-0.100">Open Street Map</a>',
   maxZoom: 18
}).addTo(map);
function currentLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((function (position) {
                var marker = L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);
                marker.bindPopup("Ma position :<br> Latitude : " + position.coords.latitude + ',<br>Longitude ' + position.coords.longitude).openPopup();
            }));
        } else {
            alert("La géolocalisation n'est pas supportée par ce navigateur.");
        }
}
//marker.bindPopup("Ma position :<br> Latitude : " + position.coords.latitude + ',<br>Longitude ' + position.coords.longitude).openPopup();
$('#myLocation').click(function (e) {
    currentLocation();
});
</script>


</body>
</html>
