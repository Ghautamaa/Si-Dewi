<div
    class="sticky hidden h-full pb-2 bg-white rounded-t-none md:w-2/6 lg:w-1/6 top-20 md:block rounded-r-2xl drop-shadow">
    <div class="py-8 ">
        <form class="formfilter1" action="{{ route('jelajahi.filter') }}" method="GET">
            <div class="px-4 mb-3">
                <select name="kode" id="pilih_data"
                    onchange="toggleClasses() ; document.querySelector('.formfilter1').submit()"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @if (request()->has('kode'))
                        <option hidden value="{{ request()->get('kode') }}" selected>{{ request()->get('kode') }}
                        </option>
                    @endif
                    <option value="Desa">Desa</option>
                    <option value="Destinasi">Destinasi</option>
                </select>
            </div>
            <div class="px-4 mb-4 ">
                <div class="relative mt-3">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" name="search"
                        class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..." value="{{ request()->get('search') }}">
                </div>
                {{-- <input class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="search" value="{{ request()->get('search') }}"> --}}
            </div>

            <div class="kategori-desa ">
                <h3 class="mb-4 text-2xl font-bold text-center text-gray-900 dark:text-white">Kategori Desa</h3>
                <div class="flex flex-col justify-center px-4">
                    <ul class="w-full text-lg font-medium text-gray-900 bg-white dark:text-white">
                        <li class="w-full border-gray-200 rounded-t-lg dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="vue-checkbox" type="checkbox" name="kategori[]" value="Maju"
                                    {{ in_array('Maju', $selectedKategori) ? 'checked' : '' }}
                                    onchange="document.querySelector('.formfilter1').submit()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="vue-checkbox"
                                    class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Maju</label>
                            </div>
                        </li>
                        <li class="w-full border-gray-200 rounded-t-lg dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="react-checkbox" type="checkbox" name="kategori[]" value="Berkembang"
                                    {{ in_array('Berkembang', $selectedKategori) ? 'checked' : '' }}
                                    onchange="document.querySelector('.formfilter1').submit()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="react-checkbox"
                                    class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Berkembang</label>
                            </div>
                        </li>
                        <li class="w-full border-gray-200 rounded-t-lg dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="angular-checkbox" type="checkbox" name="kategori[]" value="Mandiri"
                                    {{ in_array('Mandiri', $selectedKategori) ? 'checked' : '' }}
                                    onchange="document.querySelector('.formfilter1').submit()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="angular-checkbox"
                                    class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Mandiri</label>
                            </div>
                        </li>
                        <li class="w-full border-gray-200 rounded-t-lg dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="laravel-checkbox" type="checkbox" name="kategori[]" value="Rintisan"
                                    {{ in_array('Rintisan', $selectedKategori) ? 'checked' : '' }}
                                    onchange="document.querySelector('.formfilter1').submit()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="laravel-checkbox"
                                    class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Rintisan</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-5">
            <h3 class="mb-4 text-2xl font-bold text-center text-gray-900 dark:text-white">Kabupaten</h3>
            <div class="flex flex-col justify-center px-4">
                <ul class="w-full text-lg font-medium text-gray-900 bg-white dark:text-white">
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="badung-checkbox" type="checkbox" name="kabupaten[]" value="Badung"
                                {{ in_array('Badung', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.formfilter1').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="badung-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Badung</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="bangli-checkbox" type="checkbox" name="kabupaten[]" value="Bangli"
                                {{ in_array('Bangli', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.formfilter1').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="bangli-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Bangli</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="buleleng-checkbox" type="checkbox" name="kabupaten[]" value="Buleleng"
                                {{ in_array('Buleleng', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.formfilter1').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="buleleng-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Buleleng</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="denpasar-checkbox" type="checkbox" name="kabupaten[]" value="Denpasar"
                                {{ in_array('Denpasar', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.formfilter1').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="denpasar-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Denpasar</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="gianyar-checkbox" type="checkbox" name="kabupaten[]" value="Gianyar"
                                {{ in_array('Gianyar', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.formfilter1').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="gianyar-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Gianyar</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="jembrana-checkbox" type="checkbox" name="kabupaten[]" value="Jembrana"
                                {{ in_array('Jembrana', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.formfilter1').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="jembrana-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Jembrana</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="karangasem-checkbox" type="checkbox" name="kabupaten[]" value="Karangasem"
                                {{ in_array('Karangasem', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.formfilter1').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="karangasem-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Karangasem</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="klungkung-checkbox" type="checkbox" name="kabupaten[]" value="Klungkung"
                                {{ in_array('Klungkung', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.formfilter1').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="klungkung-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Klungkung</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="tabanan-checkbox" type="checkbox" name="kabupaten[]" value="Tabanan"
                                {{ in_array('Tabanan', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.formfilter1').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="tabanan-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Tabanan</label>
                        </div>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</div>

<script>
    function toggleClasses(kode = 'Desa') {
        console.log(kode);
        const select = document.getElementById('pilih_data');
        const desaElements = document.querySelectorAll('.desa, .kategori-desa');
        const destinasiElements = document.querySelectorAll('.destinasi');

        if (select.value === 'Desa') {
            desaElements.forEach(element => element.classList.remove('hidden'));
            desaElements.forEach(element => element.classList.add('block'));
            destinasiElements.forEach(element => element.classList.remove('block'));
            destinasiElements.forEach(element => element.classList.add('hidden'));
        } else if (select.value === 'Destinasi') {
            desaElements.forEach(element => element.classList.remove('block'));
            desaElements.forEach(element => element.classList.add('hidden'));
            destinasiElements.forEach(element => element.classList.remove('hidden'));
            destinasiElements.forEach(element => element.classList.add('block'));
        }
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
        toggleClasses();
    });
</script>
