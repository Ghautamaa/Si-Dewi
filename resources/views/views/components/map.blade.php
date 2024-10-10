<script>
    const mymap = L.map("Map").setView([-8.384321, 115.218391], 11);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(mymap);

    var latInput = document.createElement('input');
    var lngInput = document.createElement('input');

    // Lokasi Terkini
    document.getElementById("locateButton").addEventListener("click", function() {
        getLocation();
    });

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            console.log("Geolocation is not supported by this browser.");
        }
    }

    function showPosition(position) {
        var latLng = [position.coords.latitude, position.coords.longitude];

        if (!marker) {
            marker = L.marker(latLng).addTo(mymap);
        } else {
            marker.setLatLng(latLng);
        }

        latInput.value = position.coords.latitude;
        lngInput.value = position.coords.longitude;

        mymap.setView(latLng, 18);
    }

    var curLocation = [latInput.value, lngInput.value];

    mymap.attributionControl.setPrefix(false);

    var marker = new L.marker(curLocation, {
        draggable: true
    }).addTo(mymap);

    marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            draggable: true
        }).bindPopup(position).update();
        maps.value = position.lat + ", " + position.lng;
    });

    mymap.on("click", function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;

        if (!marker) {
            marker = L.marker(e.latlng).addTo(mymap);
        } else {
            marker.setLatLng(e.latlng);
        }
        maps.value = lat + ", " + lng;
    });
</script>
