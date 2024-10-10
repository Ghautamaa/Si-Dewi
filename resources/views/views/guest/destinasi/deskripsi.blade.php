<div class="p-6 mb-2 bg-white rounded-2xl sm:w-3/5 sm:p-8 h-fit ">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="max-w-2xl text-4xl font-bold text-left xl:text-5xl md:text-4xl">
                {{ $destinasi['nama'] }}
            </h1>
            <p class="mt-2 font-semibold">
                {{ $desa['nama'] }} / {{ $destinasi['kategori']['nama'] }}
            </p>
        </div>

        <div class="flex flex-col items-center star">
            <div class="flex gap-1">

                @php

                    // Asumsikan averageRating = 3.8
                    $rating = round($averageRating * 2) / 2; // Membulatkan ke 0.5 terdekat
                    $fullStars = floor($rating); // Mendapatkan jumlah bintang penuh
                    $halfStar = $rating - $fullStars >= 0.5 ? 1 : 0; // Mendapatkan setengah bintang jika ada
                    $emptyStars = 5 - $fullStars - $halfStar; // Sisa bintang kosong
                @endphp

                {{-- Bintang Penuh --}}
                @for ($i = 0; $i < $fullStars; $i++)
                    <svg class="w-5 h-5 text-yellow-400 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                    </svg>
                @endfor

                {{-- Setengah Bintang --}}
                @if ($halfStar)
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <defs>
                            <linearGradient id="half-yellow-gray" x1="0" x2="1" y1="0"
                                y2="0">
                                <stop offset="50%" stop-color="#eab308" />
                                <stop offset="50%" stop-color="#9ca3af" />
                            </linearGradient>
                        </defs>
                        <path fill="url(#half-yellow-gray)"
                            d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                    </svg>
                @endif

                {{-- Bintang Kosong --}}
                @for ($i = 0; $i < $emptyStars; $i++)
                    <svg class="w-5 h-5 text-gray-400 dark:text-gray-600" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                    </svg>
                @endfor

            </div>
            {{-- <h1 class="mt-1 text-sm font-semibold text-center lg:text-xl">
                {{ $averageRating }}
            </h1> --}}
        </div>
    </div>
    <div class="deskripsi">
        <div class="max-w-full mt-5">
            <p class="break-words">{!! nl2br(e($destinasi['deskripsi'])) !!}</p>
        </div>
    </div>
    @if ($fasilitas->isNotEmpty())
        <div class="mt-10 fasilitas">
            <h1 class="text-4xl font-bold text-center">
                Fasilitas
            </h1>
            <div class="grid grid-cols-4 gap-5">
                @foreach ($fasilitas as $row)
                    <div
                        class="flex items-center justify-center p-3 my-10 text-xl font-semibold text-center text-white border bg-primary-200 hover:bg-cyan-700 rounded-3xl">
                        {{ $row['nama'] }}
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <h1></h1>
    @endif
    @include('guest.destinasi.map')
</div>
