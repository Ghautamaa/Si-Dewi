<div class="md:w-4/6 xl:w-5/6 mt-8 mx-6 md:mx-8">
    @if ($desa)
        <div class="hidden desa">
            <div class=" grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($desa as $row)
                    <div
                        class=" bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="/desa/{{ $row['id'] }}">
                            <img class="rounded-t-lg h-64 w-full relative"
                                src="{{ env('APP_API_URL') }}/resource/desawisata/{{ $row['gambar'] }}"
                                alt="{{ $row['nama'] }}" />
                        </a>
                        <div class="m-5 h-fit">
                            <a href="/desa/{{ $row['id']}}">
                                <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $row['nama'] }}</h5>
                            </a>
                            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400 break-words">
                                {{ \Illuminate\Support\Str::limit($row['deskripsi'], 100) }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="flex justify-center mt-10">
                {{ $desa->links() }}
            </div>
        </div>
    @else
        <div class="text-center">
            Tidak ada Desa
        </div>
    @endif
    @if ($destinasi)
        <div class="hidden destinasi">
            <div class=" grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($destinasi as $row)
                    <div
                        class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="/desa/{{ $row['id'] }}">
                            <img class="rounded-t-lg h-64 relative w-full"
                                src="{{ env('APP_API_URL') }}/resource/destinasiwisata/{{ $row['gambar'] }}"
                                alt="{{ $row['nama'] }}" />
                        </a>
                        <div class="m-5 h-fit">
                            <a href="/desa/{{ $row['id'] }}">
                                <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $row['nama'] }}</h5>
                            </a>
                            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400 break-words">
                                {{ \Illuminate\Support\Str::limit($row['deskripsi'], 100) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-center mt-10">
                {{ $destinasi->links() }}
            </div>
        </div>
    @else
        <div class="text-center">
            Tidak ada Destinasi
        </div>
    @endif
</div>
