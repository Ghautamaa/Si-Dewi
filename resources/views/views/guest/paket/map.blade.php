{{-- @php
    use App\Helpers\MapHelper;
    // $maps = $desa['maps'];
    // preg_match('/(\d+)°(\d+)\'(\d+(\.\d+)?)\"([NS]) (\d+)°(\d+)\'(\d+(\.\d+)?)\"([EW])/', $maps, $matches);

    // $latitude = MapHelper::dmsToDecimal3($matches[1], $matches[2], $matches[3], $matches[5]);
    // $longitude = MapHelper::dmsToDecimal3($matches[6], $matches[7], $matches[8], $matches[10]);


    $dmsString = $desa['maps'];
    $coordinates = MapHelper::parseDmsCoordinates($dmsString);

    $longitude = $coordinates['longitude'] ;
    $latitude =  $coordinates['latitude'];

@endphp --}}

<div class="bg-white rounded-2xl p-6 h-96">
    <h1 class="text-xl font-semibold">Lokasi Desa</h1>
    <p class="text-lg">{{ $desa['alamat'] }} / {{ $desa['kabupaten'] }}</p>
    <div class="h-full mt-4 sm:container text-justify px-1 w-full mx-auto">
        <div id="map" class="relative h-64 z-0"></div>
    </div>
</div>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var gmapUrl = 'https://www.google.com/maps?q=' + {{ $desa['maps'] }};

    document.addEventListener('DOMContentLoaded', function() {
        // Initialize the map
        var map = L.map('map').setView([{{ $desa['maps'] }}], 15);

        // Add a tile layer to the map
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker to the map
        L.marker([{{ $desa['maps'] }}]).addTo(map)
            .bindPopup('<a href="' + gmapUrl +
                '" target="_blank" style="text-decoration:none; color: inherit;">Lokasi Desa</a>')
            .openPopup();
    });
</script>
