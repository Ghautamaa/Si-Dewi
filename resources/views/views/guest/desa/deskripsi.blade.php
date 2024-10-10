<div class="sm:w-4/6">
    <div class="bg-white rounded-2xl p-6 h-fit mb-5">
        <div class="mb-2 ">
            <h1 class="text-5xl font-bold">{{ $desa['nama'] }}</h1>
        </div>
        <div class="text-xl text-gray-600 mb-1">
            <p class="font-semibold "><span class="text-green-700 ">{{ $desa['kategori'] }} </span> /
                {{ $desa['kabupaten'] }}
            </p>
        </div>
        <div class="mt-5 max-w-full">
            <p class="break-words">{!! nl2br(e($desa['deskripsi'])) !!}</p>
        </div>
    </div>
    @if($berita->isNotEmpty())
    <div class="bg-white rounded-2xl p-6 h-fit">
        <div class="mb-4 ">
            <h1 class="text-3xl font-semibold">Berita Terbaru</h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 ">

            <!-- Card 1 -->
            @foreach ($berita as $row)
                <a href="/artikel/{{ $row['id'] }}" class="relative block text-white group" style="height: 10rem">
                    <div class="relative flex items-end h-full transition-transform transform  group-hover:-translate-y-2 rounded-2xl"
                        style="background-image: url('{{ env('APP_API_URL') }}/resource/berita/{{ $row['gambar'] }}'); background-size: cover; background-position: center;">
                        <div
                            class="absolute inset-0 transition-opacity bg-gradient-to-t from-black to-transparent opacity-20 group-hover:opacity-50 rounded-2xl">
                        </div>
                        <div
                            class=" !pt-0 z-10 transition-opacity group-hover:absolute group-hover:opacity-0 p-2">
                            <h2 class="mt-4 text-base font-semibold sm:text-3xl">{{ $row['judul'] }}</h2>
                        </div>
                        <div
                            class="absolute z-20 w-full p-4 transition-opacity opacity-0 group-hover:opacity-100 p-2">

                            <p class="mt-4 font-bold">Read more</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    @endif
</div>
