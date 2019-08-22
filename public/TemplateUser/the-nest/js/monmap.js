window.onload = function() {
    console.log("ok");

    var mymap = L.map("mapid").setView([6.212069, 1.1875334], 13);

    var tileStreets = L.tileLayer(
        "https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}",
        {
            attribution:
                'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: "mapbox.streets",
            accessToken:
                "pk.eyJ1IjoicGFzY2FsMjAxOSIsImEiOiJjanpjcnd0Y28wOGlkM25wc2d4djN0NWQ4In0.SXGYho5rGGYtJBs8Yf--8A"
        }
    );
    tileStreets.addTo(mymap);

    var marker = L.marker([6.212069, 1.1875334], {
        draggable: "true"
    });
    function currentLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                document.getElementById("Latitude").value =
                    position.coords.latitude;
                document.getElementById("Longitude").value =
                    position.coords.longitude;
                var marker = L.marker(
                    [position.coords.latitude, position.coords.longitude],
                    {
                        draggable: "true"
                    }
                );
                //marker.bindPopup("Ma position :<br> Latitude : " + position.coords.latitude + ',<br>Longitude ' + position.coords.longitude).openPopup();
            });
        } else {
            alert("La géolocalisation n'est pas supportée par ce navigateur.");
        }
    }
    //marker.bindPopup("Ma position :<br> Latitude : " + position.coords.latitude + ',<br>Longitude ' + position.coords.longitude).openPopup();
    $("#myLocation").click(function(e) {
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
};
