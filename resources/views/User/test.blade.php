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
    var mymap = L.map("mapid").setView([6.212069, 1.1875334], 15);

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
</html>
