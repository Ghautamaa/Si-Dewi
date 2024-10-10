<nav class="w-full sticky top-0 z-10 text-white bg-secondary drop-shadow-xl ">
    <div class="p-4 xl:mx-56 xl:px-0 ">
        <div class="flex flex-wrap items-center justify-between mx-auto max-w-screen ">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/logo_notext.png') }}" class="h-12" alt="Logo" />
                <span class="self-center text-2xl font-semibold grechen-fuemen-regular whitespace-nowrap">Si Dewi</span>
            </a>
            <div class="flex md:order-2">
                <form action="/jelajahi" method="get">
                    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                        aria-expanded="false"
                        class="md:hidden text-white dark:text-gray-400 hover:bg-white hover:text-secondary dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <div class="relative hidden md:block">
                        <div class="relative mt-3">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" name="search"
                                class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search..." value="{{ request()->get('search') }}">
                        </div>
                    </div>
                    <button data-collapse-toggle="navbar-search" type="button"
                        class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500rounded-lg md:hidden hover:bg-white hover:text-secondary focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </form>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-white dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 text-sm text-white border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search...">
                </div>
                <div class="hidden md:block">
                    <ul
                        class=" flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                        <li>
                            <a href="{{ url('/') }}" class="block px-3 py-2 rounded md:bg-transparent"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/jelajahi') }}"
                                class="block px-3 py-2 rounded  md:hover:bg-transparent">Desa Wisata</a>
                        </li>
                        <li>
                            <a href="{{ url('/artikel') }}"
                                class="block px-3 py-2 rounded  md:hover:bg-transparent">Artikel</a>
                        </li>
                    </ul>
                </div>
                <div class="block md:hidden">
                    <form class="formfilter " action="{{ route('jelajahi.filter') }}" method="GET">
                    <div class="  my-5">
                        <select name="kode" id="pilih_data"
                            onchange="toggleClasses() ; document.querySelector('.formfilter').submit()"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if (request()->has('kode'))
                                <option hidden value="{{ request()->get('kode') }}" selected>
                                    {{ request()->get('kode') }}
                                </option>
                            @endif
                            <option value="Desa">Desa</option>
                            <option value="Destinasi">Destinasi</option>
                        </select>
                    </div>
                    {{-- <div class=" px-4 mb-4">
                        <div class="relative mt-3">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" name="search"
                                class="block w-full p-2 text-sm text-white border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search..." value="{{ request()->get('search') }}">
                        </div> --}}
                    {{-- <input class=" bg-gray-50 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="search" value="{{ request()->get('search') }}"> --}}
                    {{-- </div> --}}
                    <div class="flex justify-between">
                        <div class="kategori-desa w-full border-white">
                            <h3 class="mb-4 text-2xl font-bold  text-white dark:text-white">Kategori Desa
                            </h3>
                            <div class="flex flex-col justify-center ">
                                <ul class="w-full text-lg font-medium text-white">
                                    <li class="w-full border-gray-200 rounded-t-lg dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="vue-checkbox" type="checkbox" name="kategori[]"
                                                value="Maju"
                                                {{ in_array('Maju', $selectedKategori) ? 'checked' : '' }}
                                                onchange="document.querySelector('.formfilter').submit()"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="vue-checkbox"
                                                class="w-full py-3 font-medium text-white ms-2 dark:text-gray-300">Maju</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-gray-200 rounded-t-lg dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="react-checkbox" type="checkbox" name="kategori[]"
                                                value="Berkembang"
                                                {{ in_array('Berkembang', $selectedKategori) ? 'checked' : '' }}
                                                onchange="document.querySelector('.formfilter').submit()"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="react-checkbox"
                                                class="w-full py-3 font-medium text-white ms-2 dark:text-gray-300">Berkembang</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-gray-200 rounded-t-lg dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="angular-checkbox" type="checkbox" name="kategori[]"
                                                value="Mandiri"
                                                {{ in_array('Mandiri', $selectedKategori) ? 'checked' : '' }}
                                                onchange="document.querySelector('.formfilter').submit()"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="angular-checkbox"
                                                class="w-full py-3 font-medium text-white ms-2 dark:text-gray-300">Mandiri</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-gray-200 rounded-t-lg dark:border-gray-600">
                                        <div class="flex items-center ps-3">
                                            <input id="laravel-checkbox" type="checkbox" name="kategori[]"
                                                value="Rintisan"
                                                {{ in_array('Rintisan', $selectedKategori) ? 'checked' : '' }}
                                                onchange="document.querySelector('.formfilter').submit()"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="laravel-checkbox"
                                                class="w-full py-3 font-medium text-white ms-2 dark:text-gray-300">Rintisan</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="kabupaten w-full">
                            <h3 class="mb-4 text-2xl font-bold  text-white dark:text-white">Kabupaten
                            </h3>
                            <div class="flex flex-col justify-center ">
                                <ul class="w-full text-lg font-medium text-white  dark:text-white">
                                    <li class="w-full ">
                                        <div class="flex items-center ps-3">
                                            <input id="badung-checkbox" type="checkbox" name="kabupaten[]"
                                                value="Badung"
                                                {{ in_array('Badung', $selectedKabupaten) ? 'checked' : '' }}
                                                onchange="document.querySelector('.formfilter').submit()"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="badung-checkbox"
                                                class="w-full py-3 font-medium text-white ms-2 dark:text-gray-300">Badung</label>
                                        </div>
                                    </li>
                                    <li class="w-full ">
                                        <div class="flex items-center ps-3">
                                            <input id="bangli-checkbox" type="checkbox" name="kabupaten[]"
                                                value="Bangli"
                                                {{ in_array('Bangli', $selectedKabupaten) ? 'checked' : '' }}
                                                onchange="document.querySelector('.formfilter').submit()"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="bangli-checkbox"
                                                class="w-full py-3 font-medium text-white ms-2 dark:text-gray-300">Bangli</label>
                                        </div>
                                    </li>
                                    <li class="w-full ">
                                        <div class="flex items-center ps-3">
                                            <input id="buleleng-checkbox" type="checkbox" name="kabupaten[]"
                                                value="Buleleng"
                                                {{ in_array('Buleleng', $selectedKabupaten) ? 'checked' : '' }}
                                                onchange="document.querySelector('.formfilter').submit()"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="buleleng-checkbox"
                                                class="w-full py-3 font-medium text-white ms-2 dark:text-gray-300">Buleleng</label>
                                        </div>
                                    </li>
                                    <li class="w-full ">
                                        <div class="flex items-center ps-3">
                                            <input id="denpasar-checkbox" type="checkbox" name="kabupaten[]"
                                                value="Denpasar"
                                                {{ in_array('Denpasar', $selectedKabupaten) ? 'checked' : '' }}
                                                onchange="document.querySelector('.formfilter').submit()"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="denpasar-checkbox"
                                                class="w-full py-3 font-medium text-white ms-2 dark:text-gray-300">Denpasar</label>
                                        </div>
                                    </li>
                                    <li class="w-full ">
                                        <div class="flex items-center ps-3">
                                            <input id="gianyar-checkbox" type="checkbox" name="kabupaten[]"
                                                value="Gianyar"
                                                {{ in_array('Gianyar', $selectedKabupaten) ? 'checked' : '' }}
                                                onchange="document.querySelector('.formfilter').submit()"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="gianyar-checkbox"
                                                class="w-full py-3 font-medium text-white ms-2 dark:text-gray-300">Gianyar</label>
                                        </div>
                                    </li>
                                    <li class="w-full ">
                                        <div class="flex items-center ps-3">
                                            <input id="jembrana-checkbox" type="checkbox" name="kabupaten[]"
                                                value="Jembrana"
                                                {{ in_array('Jembrana', $selectedKabupaten) ? 'checked' : '' }}
                                                onchange="document.querySelector('.formfilter').submit()"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="jembrana-checkbox"
                                                class="w-full py-3 font-medium text-white ms-2 dark:text-gray-300">Jembrana</label>
                                        </div>
                                    </li>
                                    <li class="w-full ">
                                        <div class="flex items-center ps-3">
                                            <input id="karangasem-checkbox" type="checkbox" name="kabupaten[]"
                                                value="Karangasem"
                                                {{ in_array('Karangasem', $selectedKabupaten) ? 'checked' : '' }}
                                                onchange="document.querySelector('.formfilter').submit()"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="karangasem-checkbox"
                                                class="w-full py-3 font-medium text-white ms-2 dark:text-gray-300">Karangasem</label>
                                        </div>
                                    </li>
                                    <li class="w-full ">
                                        <div class="flex items-center ps-3">
                                            <input id="klungkung-checkbox" type="checkbox" name="kabupaten[]"
                                                value="Klungkung"
                                                {{ in_array('Klungkung', $selectedKabupaten) ? 'checked' : '' }}
                                                onchange="document.querySelector('.formfilter').submit()"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="klungkung-checkbox"
                                                class="w-full py-3 font-medium text-white ms-2 dark:text-gray-300">Klungkung</label>
                                        </div>
                                    </li>
                                    <li class="w-full ">
                                        <div class="flex items-center ps-3">
                                            <input id="tabanan-checkbox" type="checkbox" name="kabupaten[]"
                                                value="Tabanan"
                                                {{ in_array('Tabanan', $selectedKabupaten) ? 'checked' : '' }}
                                                onchange="document.querySelector('.formfilter').submit()"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="tabanan-checkbox"
                                                class="w-full py-3 font-medium text-white ms-2 dark:text-gray-300">Tabanan</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</nav>
