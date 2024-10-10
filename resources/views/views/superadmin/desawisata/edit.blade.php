@extends('Admin.layouts.main')

@section('main')
    <div class="mx-4">
        <h2 class="mb-3 font-bold tracking-tight text-gray-500 ">Profil / Edit </h2>
        <p class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white"> Edit Profil Desa </p>
        <form class="mx-auto" action="/superadmin/desa/{{ $desawisata['id'] }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div
                class="block p-6 mt-8 mb-5 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Info Desa </p>
                <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 ">
                    <div class="">
                        <label for="nama"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="nama" value="{{ $desawisata['nama'], old('nama') }}" name="nama" id="nama"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required />
                    </div>
                    <div class="">
                        <label for="alamat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="alamat" value="{{ $desawisata['alamat'], old('alamat') }}" name="alamat"
                            id="alamat"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required />
                    </div>
                    <div class="mb-2">
                        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori
                        </label>
                        <select id="kategori" name="kategori"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if ($desawisata['kategori'])
                                <option hidden selected value="{{ $desawisata['kategori'] }}">{{ $desawisata['kategori'] }}
                                </option>
                            @endif
                            <option hidden>Pilih Kategori</option>
                            <option value="Rintisan">Rintisan</option>
                            <option value="Berkembang">Berkembang</option>
                            <option value="Maju">Maju</option>
                            <option value="Mandiri">Mandiri</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="kabupaten" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Kabupaten</label>
                        <select id="kabupaten" name="kabupaten"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if ($desawisata['kabupaten'])
                                <option hidden selected value="{{ $desawisata['kabupaten'] }}">
                                    {{ $desawisata['kabupaten'] }}
                                </option>
                            @endif
                            <option hidden>Pilih Kabupaten</option>
                            <option value="Badung">Badung</option>
                            <option value="Bangli">Bangli</option>
                            <option value="Jembrana">Jembrana</option>
                            <option value="Klungkung">Klungkung</option>
                            <option value="Karangasem">Karangasem</option>
                            <option value="Gianyar">Gianyar</option>
                            <option value="Tabanan">Tabanan</option>
                            <option value="Denpasar">Denpasar</option>
                            <option value="Buleleng">Buleleng</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="deskripsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="18"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your thoughts here...">{{ $desawisata['deskripsi'], old('deskripsi') }}</textarea>
                    </div>
                    <input type="hidden" name="gambarOld" value="{{ $desawisata['gambar'] }}">
                    <div class="mb-5">
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi
                            Desa Wisata</label>
                        <input type="text" value="{{ $desawisata['maps'], old('maps') }}" name="maps" id="maps"
                            class="mb-4 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />

                        <div class="relative z-0 flex items-center justify-center w-full rounded bg-gray-50 dark:bg-gray-800 h-96"
                            id="Map">
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="block p-6 mt-8 mb-5 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Gambar </p>
                <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="mb-5">

                    <img class="mb-2 image-preview img-fluid"
                        src="{{ env('APP_API_URL') }}/resource/desawisata/{{ $desawisata['gambar'] }}">
                    <input onchange="previewImage()" name="gambar" id="gambar"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
            </div>
            {{-- Mapss --}}

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            <button type="reset"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>

        </form>

        <script>
            // PreviewImage
            function previewImage() {
                const image = document.querySelector('#gambar');
                const imagePreview = document.querySelector('.image-preview');

                imagePreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imagePreview.src = oFREvent.target.result;
                }
            }
            // Map
            // Inisialisasi peta dengan Leaflet
            const mymap = L.map("Map").setView([-8.384321, 115.218391], 11);

            // Layer tiles OpenStreetMap
            const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(mymap);

            // Variabel untuk input koordinat
            var mapsInput = document.getElementById('maps');

            // Marker
            var marker;

            // Fungsi untuk menambah atau memperbarui marker
            function addOrUpdateMarker(latlng) {
                if (marker) {
                    marker.setLatLng(latlng);
                } else {
                    marker = L.marker(latlng, {
                        draggable: true
                    }).addTo(mymap);
                    marker.on('dragend', function(event) {
                        var position = marker.getLatLng();
                        marker.setLatLng(position).bindPopup(position.toString()).update();
                        mapsInput.value = position.lat + ", " + position.lng;
                    });
                }
            }

            // Ambil koordinat dari variabel maps
            var mapsCoordinates = "{{ $desawisata['maps'] ?? old('maps') }}";
            if (mapsCoordinates) {
                var coordinates = mapsCoordinates.split(', ');
                var lat = parseFloat(coordinates[0]);
                var lng = parseFloat(coordinates[1]);

                // Tambahkan marker pada peta
                addOrUpdateMarker([lat, lng]);

                // Set view pada peta
                mymap.setView([lat, lng], 18);
            }

            // Event klik pada peta untuk menambah marker baru
            mymap.on('click', function(e) {
                var latlng = e.latlng;

                // Tambahkan atau perbarui marker
                addOrUpdateMarker(latlng);

                // Update nilai input maps
                mapsInput.value = latlng.lat + ", " + latlng.lng;
            });
        </script>
    @endsection
