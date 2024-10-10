<div class="hidden p-6 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel"
    aria-labelledby="dashboard-tab">
    @if ($akomodasi->isNotEmpty())

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($akomodasi as $row)
                <a href="/desa/{{ $row['id_desawisata'] }}/akomodasi/{{ $row['id'] }}"
                    class="group relative block text-white ">
                    <div class="relative flex h-96 transform items-end transition-transform group-hover:-translate-y-2 rounded-2xl"
                        style="background-image: url('{{ env('APP_API_URL') }}/resource/akomodasi/{{ $row['gambar'] }}'); background-size: cover; background-position: center;">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-20 transition-opacity group-hover:opacity-50 rounded-2xl">
                        </div>
                        <div
                            class="p-4 !pt-0 z-10 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                            <p class="mt-4 text-xl font-medium ">{{ $row['kategori'] }}</p>
                            <h2 class="mt-2 text-3xl font-bold ">{{ $row['nama'] }}</h2>
                        </div>
                        <div
                            class="absolute p-4 opacity-0 transition-opacity group-hover:opacity-100 sm:p-6 lg:p-8 w-full z-20">
                            <h3 class="mt-4 text-xl font-medium sm:text-2xl">{{ $row['nama'] }}</h3>
                            <p class="mt-4 text-sm sm:text-base break-words w-full">

                            </p>
                            <p class="mt-4 font-bold">Read more</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <header class=" pt-3  ">
            <h2 class="text-3xl text-gray-600 font-semibold text-center">Tidak ada akomodasi yang tersedia</h2>
        </header>
    @endif
</div>
