<div class="mt-20 p-6 mb-2 bg-white rounded-2xl sm:w-4/5 sm:p-8 h-fit ">
    <div class="  rounded-lg   dark:bg-gray-800  mb-6">
        <div class="">
            <img class="w-full h-full sm:h-1/4 relative" src="{{ env('APP_API_URL') }}/resource/berita/{{ $berita['gambar'] }}"
                alt="{{ $berita['judul'] }}" >
        </div>
        <div class=" text-gray-700 break-words headlightfont-normal dark:text-gray-400 pt-2 ">
            <h5 class="font-bold text-left text-4xl my-3 pt-blog-title"><a href="/artikel/{{ $berita['id'] }}">{{ $berita['judul'] }}</a>
            </h5>
            <p>{{$berita['isi_berita']}}</p>
            <hr class="my-3">
        </div>
    </div>
</div>
