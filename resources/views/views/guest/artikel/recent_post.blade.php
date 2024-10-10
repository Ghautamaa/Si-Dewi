<div class="mt-20 p-6 mb-2 bg-white rounded-2xl md:w-4/5 xl:p-8 h-fit ">
    @foreach ($berita as $row)
        <a href="/artikel/{{ $row['id'] }}">
            <div class="bg-white  rounded-lg   dark:bg-gray-800  mb-6">
                <div class="">
                    <img class="w-full h-full relative" src="{{ env('APP_API_URL') }}/resource/berita/{{ $row['gambar'] }}"
                        alt="{{ $row['judul'] }}" >
                </div>

                <div class=" text-gray-700 break-words headlightfont-normal dark:text-gray-400 pt-2 ">
                    <h5 class="font-bold text-2xl pt-blog-title"><a
                            href="/artikel/{{ $row['id'] }}">{{ $row['judul'] }}</a>
                    </h5>
                    <p>{{ Str::limit($row['isi_berita'], 500) }}</p>
                    <hr class="my-3">
                </div>
            </div>
        </a>
    @endforeach
    <div class="flex justify-center mt-10">
        {{ $berita->links() }}</div>
</div>
