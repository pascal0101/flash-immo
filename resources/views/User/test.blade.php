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
<body>

<div id="mapid"  style="width: 640px; height: 480px;"></div>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
   <input type="text"  placeholder="Longitude" id="Longitude">
    <input type="text" placeholder="Latitude" id="Latitude">

<script>
  console.log('ok');

   var mymap = L.map('mapid').setView([6.212069, 1.1875334], 13);

    var tileStreets = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	maxZoom: 18,
	id: 'mapbox.streets',
	accessToken: 'pk.eyJ1IjoicGFzY2FsMjAxOSIsImEiOiJjanpjcnd0Y28wOGlkM25wc2d4djN0NWQ4In0.SXGYho5rGGYtJBs8Yf--8A'
    });
    tileStreets.addTo(mymap);

        var marker = L.marker([6.212069, 1.1875334], {
            draggable: "true"
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
</script>


</body>
</html>
