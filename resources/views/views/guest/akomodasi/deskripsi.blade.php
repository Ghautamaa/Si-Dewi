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


<div class="mb-2 bg-white  sm:w-4/6   rounded-2xl p-8 h-fit ">
    <div class="flex justify-between items-center">
        <div class="">
            <h1 class="text-5xl font-bold max-w-2xl">{{ $akomodasi['nama'] }} </h1>
            <p class="font-semibold mt-1 ">{{ $desa['nama'] }} / {{ $desa['kabupaten'] }}
            </p>
        </div>
        <div class="star flex flex-col items-center">
            {{-- <div class=" flex gap-1">
                <h2 class="text-center text-l mt-1 font-bold">Best Seller</h2>
            </div> --}}
        </div>
    </div>
    <div class="mt-10">
        <h1 class="text-xl font-semibold">Lokasi Desa</h1>
        <p class="text-lg">{{ $desa['alamat'] }} / {{ $desa['kabupaten'] }}</p>
        <div class="h-full mt-4 sm:container text-justify px-1 w-full mx-auto">
            <div id="map" class="relative h-64 z-0"></div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var gmapUrl = 'https://www.google.com/maps?q=' + {{$latitude}} + ',' + {{$longitude}};
  document.addEventListener('DOMContentLoaded', function() {
      // Initialize the map
      var map = L.map('map').setView([{{ $desa['maps'] }}], 13);

      // Add a tile layer to the map
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      // Add a marker to the map
      L.marker([{{ $latitude }}, {{ $longitude }}]).addTo(map)
      .bindPopup('<a href="' + gmapUrl + '" target="_blank" style="text-decoration:none; color: inherit;">Lokasi Desa</a>')
      .openPopup();
  });
</script>
