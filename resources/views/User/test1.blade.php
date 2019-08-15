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
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
</head>
<body>

<div id="mapid"  style="width: 800px; height: 800px;"></div>
        <!-- Make sure you put this AFTER Leaflet's CSS -->

<script>
  console.log('ok');


  var tileStreets = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoicGFzY2FsMjAxOSIsImEiOiJjanpjcnd0Y28wOGlkM25wc2d4djN0NWQ4In0.SXGYho5rGGYtJBs8Yf--8A'
  });

  var tileStreet = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.satellite',
    accessToken: 'pk.eyJ1IjoicGFzY2FsMjAxOSIsImEiOiJjanpjcnd0Y28wOGlkM25wc2d4djN0NWQ4In0.SXGYho5rGGYtJBs8Yf--8A'
  });
        var mymap = L.map('mapid',{
        center: [6.260179447459695,1.2086346763090887],
        zoom : 13,
        layers : [tileStreets,tileStreet]
        });

    var baseMaps = {
      "Rues": tileStreets,
      "Satellite": tileStreet
    };
    L.control.layers(baseMaps).addTo(mymap);



  var marker = L.marker([6.260179447459695,1.2086346763090887]).addTo(mymap);

</script>


</body>
</html>
