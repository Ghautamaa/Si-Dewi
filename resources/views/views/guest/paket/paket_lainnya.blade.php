<div class=" bg-white rounded-2xl mt-6">
    <div class="p-8">
        <h1 class="text-2xl font-bold">Paket Wisata Lainnya</h1>
        <div id="indicators-carousel" class="relative w-full mt-5" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden rounded-lg h-96">
                @foreach ($listpaketwisata as $index => $row)
                    @if (is_array($row) && isset($row['gambar'], $row['nama']))
                        <div class="hidden duration-700 ease-in-out"
                            data-carousel-item="{{ $index == 0 ? 'active' : '' }}">
                            <a href="/desa/{{ $row['id_desawisata'] }}/paketwisata/{{ $row['id'] }}" class="group relative block h-96  text-white">

                                <div class="relative flex h-96 transform items-end transition-transform group-hover:-translate-y-2 "
                                    style="background-image: url('{{ env('APP_API_URL') }}/resource/paketwisata/{{ $row['gambar'] }}'); background-size: cover; background-position: center;">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-40">
                                    </div>
                                    <div
                                        class="p-4 !pt-0 z-10 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                        <h2 class="mb-6 text-4xl text-left font-bold sm:text-3xl">
                                            {{ $row['nama'] }}</h2>
                                    </div>
                                    <div
                                        class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8 w-full">
                                        <h3 class="mt-4 text-xl font-medium sm:text-2xl">
                                            {{ $row['nama'] }}</h3>

                                        <p class="mt-4 text-sm sm:text-base break-words w-full">
                                            {{ \Illuminate\Support\Str::limit($row['deskripsi'], 100) }}
                                        </p>
                                        <p class="mt-4 font-bold">Read more</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- Slider indicators -->
            {{-- <div
                    class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                    @foreach ($listpaketwisata as $index => $row)
                        @if (is_array($row))
                            <button type="button"
                                class="w-3 h-3 rounded-full {{ $index == 0 ? 'bg-white' : '' }}"
                                aria-current="{{ $index == 0 ? 'true' : 'false' }}"
                                aria-label="Slide {{ (int) $index + 1 }}"
                                data-carousel-slide-to="{{ $index }}"></button>
                        @endif
                    @endforeach
                </div> --}}
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>


    </div>
</div>
