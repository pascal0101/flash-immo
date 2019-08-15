<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leaflet with Autocomplete API</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.3/leaflet.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        body {
            margin: 0;
        }
        #map {
            width: 700px;
            height: 700px;
        }
    </style>
</head>
<body>

<div id='map'></div>
<!-- leaflet library -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.3/leaflet.js"></script>
<script type="text/javascript" src="leaflet-unwired.js"></script>

<!-- location control -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
<!-- location control -->
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>
<!-- geocoding plugin -->
<link rel="stylesheet" href="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.5/leaflet-geocoder-locationiq.min.css">
<script src="https://maps.locationiq.com/v2/libs/leaflet-geocoder/1.9.5/leaflet-geocoder-locationiq.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-plugins/3.0.2/control/Permalink.js"></script>

<script type="text/javascript">
    // Maps access token goes here
    var key = 'b8af11f24ddec2';
//b8af11f24ddec2
//https://locationiq.com/
    // Add layers that we need to the map
    var streets = L.tileLayer.Unwired({key: key, scheme: "streets"});

    // Initialize the map
    var map = L.map('map', {
        center: [39.73, -104.99], // Map loads with this location as center
        zoom: 14,
        scrollWheelZoom: true,
        layers: [streets],
        zoomControl: false
    });

    // Add the 'zoom' control
    L.control.zoom({
        position:'topright'
    }).addTo(map);

    // Add the 'scale' control
    L.control.scale().addTo(map);
    L.control.locate({
        position: "bottomright"
    }).addTo(map);

    // Add the autocomplete text box
    L.control.geocoder(key, {
        // placeholder: 'Search nearby',
        url: "https://api.locationiq.com/v1",
        expanded: true,
        panToPoint: true,
        focus: true,
        position: "topleft"
    }).addTo(map);

    map.addControl(new L.Control.Permalink({ useLocation: true, text: null }));



</script>
</body>
</html>
