@php
    use App\Helpers\MapHelper;

    $dmsString = $desa['maps'];
    $coordinates = ['latitude' => null, 'longitude' => null];

    if (MapHelper::isDmsFormat($dmsString)) {
        $coordinates = MapHelper::parseDmsCoordinates($dmsString);
    } else {
        // Assume the coordinates are in decimal format, split by comma or space
        [$latitude, $longitude] = explode(',', $dmsString);
        $latitude = trim($latitude);
        $longitude = trim($longitude);

        $coordinates['latitude'] = $latitude;
        $coordinates['longitude'] = $longitude;
    }

    $latitude = $coordinates['latitude'];
    $longitude = $coordinates['longitude'];

@endphp

<div class="mt-5 text-justify px-1 mx-auto">
    <h1 class="font-semibold text-xl">Lokasi Destinasi</h1>
    <p class="text-xl">{{ $desa['alamat'] }} / {{ $desa['kabupaten'] }} </p>
    <div class="h-full mt-4 sm:container text-justify px-1 w-full mx-auto">
        <div id="map" class="relative h-64 z-0"></div>
    </div>
</div>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var gmapUrl = 'https://www.google.com/maps?q=' + {{ $latitude }} + ',' + {{ $longitude }};
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize the map
        var map = L.map('map').setView([{{ $desa['maps'] }}], 13);

        // Add a tile layer to the map
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker to the map
        L.marker([{{ $latitude }}, {{ $longitude }}]).addTo(map)
            .bindPopup('<a href="' + gmapUrl +
                '" target="_blank" style="text-decoration:none; color: inherit;">Lokasi Desa</a>')
            .openPopup();
    });
</script>
