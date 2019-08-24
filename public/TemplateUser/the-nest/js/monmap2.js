var long = $("#long").val();
var lat = $("#lat").val();

function initialize() {
    var mymap = L.map("mapid").setView([lat, long], 15);

    var osmLayer = L.tileLayer("http://{s}.tile.osm.org/{z}/{x}/{y}.png", {
        attribution: "© OpenStreetMap contributors",
        maxZoom: 19
    });

    mymap.addLayer(osmLayer);

    var marker = L.marker([lat, long]);
    marker.addTo(mymap);
}
