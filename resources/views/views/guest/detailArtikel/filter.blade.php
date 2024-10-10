<form class="filterberita" action="{{ route('artikel.filter') }}" method="GET">
    <div class="hidden w-full mb-5 md:order-2 lg:block">
        <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false"
            class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
            <span class="sr-only">Search</span>
        </button>
        <div class="relative hidden md:block">
            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search icon</span>
            </div>
            <input type="text" id="search-navbar" name="searchberita"
                class="block p-2 text-sm text-gray-900 border border-gray-300 rounded-lg 2xl:w-96 md:w-80 ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search..." value="{{ request()->get('searchberita') }}">
        </div>
    </div>

    <div class="hidden pb-2 bg-white rounded-lg lg:block 6 drop-shadow">

        <div class="py-3">
            <h3 class="mb-4 text-2xl font-bold text-center text-gray-900 dark:text-white">Kabupaten</h3>
            <div class="flex flex-col justify-center px-4">
                <ul class="w-full text-lg font-medium text-gray-900 bg-white dark:text-white">
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="badung-checkbox" type="checkbox" name="kabupaten[]" value="Badung"
                                {{ in_array('Badung', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.filterberita').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="badung-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Badung</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="bangli-checkbox" type="checkbox" name="kabupaten[]" value="Bangli"
                                {{ in_array('Bangli', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.filterberita').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="bangli-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Bangli</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="buleleng-checkbox" type="checkbox" name="kabupaten[]" value="Buleleng"
                                {{ in_array('Buleleng', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.filterberita').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="buleleng-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Buleleng</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="denpasar-checkbox" type="checkbox" name="kabupaten[]" value="Denpasar"
                                {{ in_array('Denpasar', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.filterberita').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="denpasar-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Denpasar</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="gianyar-checkbox" type="checkbox" name="kabupaten[]" value="Gianyar"
                                {{ in_array('Gianyar', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.filterberita').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="gianyar-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Gianyar</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="jembrana-checkbox" type="checkbox" name="kabupaten[]" value="Jembrana"
                                {{ in_array('Jembrana', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.filterberita').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="jembrana-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Jembrana</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="karangasem-checkbox" type="checkbox" name="kabupaten[]" value="Karangasem"
                                {{ in_array('Karangasem', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.filterberita').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="karangasem-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Karangasem</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="klungkung-checkbox" type="checkbox" name="kabupaten[]" value="Klungkung"
                                {{ in_array('Klungkung', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.filterberita').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="klungkung-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Klungkung</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ps-3">
                            <input id="tabanan-checkbox" type="checkbox" name="kabupaten[]" value="Tabanan"
                                {{ in_array('Tabanan', $selectedKabupaten) ? 'checked' : '' }}
                                onchange="document.querySelector('.filterberita').submit()"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="tabanan-checkbox"
                                class="w-full py-3 font-medium text-gray-900 ms-2 dark:text-gray-300">Tabanan</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</form>
