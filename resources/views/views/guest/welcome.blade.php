@extends('guest.layouts.main')

@section('main')
    <div class="h-full bg-white">
        <!-- Gambar Latar Belakang -->

        <div class="relative w-full">
            <img src="{{ asset('img/klungkung2.jpg') }}" class="object-cover w-full h-screen md:h-[calc(100vh-200px)]"
                alt="">
            <div
                class="absolute top-0 flex flex-col justify-center h-full p-4 py-10 space-y-4 text-white xl:mx-56 xl:px-0 poppins-bold ">
                <h1 class="text-6xl">EKSPLORASI KEINDAHAN ALAM </h1>
                <h1 class="text-6xl">DAN WARISAN BUDAYA YANG MEMPESONA </h1>
                <div class="flex justify-end  2xl:-mr-28">
                    <a href="/jelajahi"
                        class="flex gap-3 px-6 py-3 mt-10 text-lg font-semibold text-center rounded-full shadow-lg bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80">
                        Jelajahi
                        <svg class="text-white w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                          </svg>
                    </a>


                </div>
            </div>
        </div>


        <div class="py-8 bg-white">
            <div class="gap-1 p-4 pt-5 xl:ms-56 xl:px-0 lg:flex">
                <div class="xl:w-2/5 ">
                    <!-- Kolom Pertama: Judul dan Deskripsi -->
                    <div class="mt-10">
                        <h1 class="mb-4 text-4xl font-bold">Peta Sebaran</h1>
                        <p class="w-11/12 text-xl">Temukan desa wisata yang unik melalui peta sebaran kabupaten dan kota di
                            Bali, dan rencanakan petualangan Anda dengan mudah.</p>
                    </div>
                </div>

                <div class="flex flex-row gap-3 mt-5 space-x-4 overflow-x-auto horizontal-scroll xl:mt-0 xl:w-3/5 whitespace-nowrap cursor-grab "
                    id="scroll-container">
                    <a href="/jelajahi?kabupaten%5B%5D=Badung" class="inline-block card">
                        <div class="flex-shrink-0 image-container" style="width:25rem; height:30rem">
                            <img class="object-cover  rounded-2xl" src="{{ asset('img/badung3.jpg') }}" alt=""
                                style="width:25rem; height:30rem">
                        </div>
                        <div class="flex items-center justify-between w-full gap-3 mt-5 ">
                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Kabupaten Badung
                            </h5>
                            <svg class="mr-3 rtl:rotate-180 w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </div>
                    </a>
                    <a href="/jelajahi?kabupaten%5B%5D=Badung" class="inline-block card">
                        <div class="flex-shrink-0 image-container" style="width:25rem; height:30rem">
                            <img class="object-cover  rounded-2xl" src="{{ asset('img/bangli3.jpg') }}" alt=""
                                style="width:25rem; height:30rem">
                        </div>
                        <div class="flex items-center justify-between w-full gap-3 mt-5 ">
                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Kabupaten Bangli
                            </h5>
                            <svg class="mr-3 rtl:rotate-180 w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </div>
                    </a>
                    <a href="/jelajahi?kabupaten%5B%5D=Badung" class="inline-block card">
                        <div class="flex-shrink-0 image-container" style="width:25rem; height:30rem">
                            <img class="object-cover  rounded-2xl" src="{{ asset('img/denpasar2.jpg') }}" alt=""
                                style="width:25rem; height:30rem">
                        </div>
                        <div class="flex items-center justify-between w-full gap-3 mt-5 ">
                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Kabupaten Denpasar
                            </h5>
                            <svg class="mr-3 rtl:rotate-180 w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </div>
                    </a>
                    <a href="/jelajahi?kabupaten%5B%5D=Gianyar" class="inline-block card">
                        <div class="flex-shrink-0 image-container" style="width:25rem; height:30rem">
                            <img class="object-cover  rounded-2xl" src="{{ asset('img/gianyar2.jpg') }}" alt=""
                                style="width:25rem; height:30rem">
                        </div>
                        <div class="flex items-center justify-between w-full gap-3 mt-5 ">
                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Kabupaten Gianyar
                            </h5>
                            <svg class="mr-3 rtl:rotate-180 w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </div>
                    </a>
                    <a href="/jelajahi?kabupaten%5B%5D=Jembrana" class="inline-block card">
                        <div class="flex-shrink-0 image-container" style="width:25rem; height:30rem">
                            <img class="object-cover  rounded-2xl" src="{{ asset('img/jembrana1.jpg') }}" alt=""
                                style="width:25rem; height:30rem">
                        </div>
                        <div class="flex items-center justify-between w-full gap-3 mt-5 ">
                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Kabupaten Jembrana
                            </h5>
                            <svg class="mr-3 rtl:rotate-180 w-7 h-7" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </div>
                    </a>
                    <a href="/jelajahi?kabupaten%5B%5D=Buleleng" class="inline-block card">
                        <div class="flex-shrink-0 image-container" style="width:25rem; height:30rem">
                            <img class="object-cover  rounded-2xl" src="{{ asset('img/buleleng2.jpg') }}" alt=""
                                style="width:25rem; height:30rem">
                        </div>
                        <div class="flex items-center justify-between w-full gap-3 mt-5 ">
                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Kabupaten Buleleng
                            </h5>
                            <svg class="mr-3 rtl:rotate-180 w-7 h-7" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </div>
                    </a>
                    <a href="/jelajahi?kabupaten%5B%5D=Karangasem" class="inline-block card">
                        <div class="flex-shrink-0 image-container" style="width:25rem; height:30rem">
                            <img class="object-cover  rounded-2xl" src="{{ asset('img/karangasem1.jpg') }}"
                                alt="" style="width:25rem; height:30rem">
                        </div>
                        <div class="flex items-center justify-between w-full gap-3 mt-5 ">
                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Kabupaten Karangasem
                            </h5>
                            <svg class="mr-3 rtl:rotate-180 w-7 h-7" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </div>
                    </a>
                    <a href="/jelajahi?kabupaten%5B%5D=Klungkung" class="inline-block card">
                        <div class="flex-shrink-0 image-container" style="width:25rem; height:30rem">
                            <img class="object-cover  rounded-2xl" src="{{ asset('img/klungkung2.jpg') }}" alt=""
                                style="width:25rem; height:30rem">
                        </div>
                        <div class="flex items-center justify-between w-full gap-3 mt-5 ">
                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Kabupaten Klungkung
                            </h5>
                            <svg class="mr-3 rtl:rotate-180 w-7 h-7" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </div>
                    </a>
                    <a href="/jelajahi?kabupaten%5B%5D=Tabanan" class="inline-block card">
                        <div class="flex-shrink-0 image-container" style="width:25rem; height:30rem">
                            <img class="object-cover  rounded-2xl" src="{{ asset('img/tabanan1.jpg') }}" alt=""
                                style="width:25rem; height:30rem">
                        </div>
                        <div class="flex items-center justify-between w-full gap-3 mt-5 ">
                            <h5 class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Kabupaten Tabanan
                            </h5>
                            <svg class="mr-3 rtl:rotate-180 w-7 h-7" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </div>
                    </a>

                </div>
            </div>
        </div>

        <div class="bg-secondary">
            <div class="p-4 py-10 mt-5 text-white xl:mx-56 xl:px-0">
                <div class="py-5">
                    <h2 class="mb-4 text-4xl font-bold text-center">Destinasi Favorit</h2>
                    <p class="mb-8 text-xl text-center">Temukan destinasi favorit yang memukau dengan berbagai
                        keindahannya. Dari pantai yang menenangkan hingga pegunungan yang menjulang tinggi, setiap sudutnya
                        menawarkan pemandangan yang luar biasa. Nikmati pengalaman liburan yang tak terlupakan dengan
                        mengunjungi tempat-tempat menakjubkan ini.</p>
                </div>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                    @foreach ($review as $index => $row)
                        <div class="{{ $loop->first ? 'sm:col-span-2 sm:row-span-2' : '' }}">
                            <a href="/desa/{{ $row['destination']['id_desawisata'] ??'' }}/destinasi/{{ $row['destination']['id'] ??''}}"
                                class="relative block text-white group"
                                style="height: {{ $loop->first ? '35rem' : '17rem' }}">
                                <div class="relative flex items-end h-full transition-transform transform shadow-lg rounded-xl group-hover:-translate-y-2"
                                    style="background-image: url('{{ env('APP_API_URL') }}/resource/destinasiwisata/{{ $row['destination']['gambar'] ??'' }}'); background-size: cover; background-position: center;">
                                    <div class="absolute flex p-1 m-2 text-xl font-bold text-yellow-500l top-5 right-5">
                                        @php

                                            // Asumsikan averageRating = 3.8
                                            $rating = round($row['averageRating'] * 2) / 2; // Membulatkan ke 0.5 terdekat
                                            $fullStars = floor($rating); // Mendapatkan jumlah bintang penuh

                                            $emptyStars = 5 - $fullStars
                                        @endphp

                                        {{-- Bintang Penuh --}}
                                        @for ($i = 0; $i < $fullStars; $i++)
                                            <svg class="w-5 h-5 text-yellow-400 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                            </svg>
                                        @endfor

                                        {{-- Setengah Bintang --}}
                                        {{-- @if ($halfStar)
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <defs>
                                                    <linearGradient id="half-yellow-gray" x1="0" x2="1"
                                                        y1="0" y2="0">
                                                        <stop offset="50%" stop-color="#eab308" />
                                                        <stop offset="50%" stop-color="#9ca3af" />
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#half-yellow-gray)"
                                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                            </svg>
                                        @endif --}}

                                        {{-- Bintang Kosong --}}
                                        @for ($i = 0; $i < $emptyStars; $i++)
                                            <svg class="w-5 h-5 text-gray-400 dark:text-gray-600" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                            </svg>
                                        @endfor
                                        {{-- ⭐️ {{ Str::limit($row['averageRating'], 3, '') }} --}}
                                    </div>
                                    <div
                                        class="absolute inset-0 transition-opacity bg-gradient-to-t from-black to-transparent opacity-20 group-hover:opacity-50">
                                    </div>
                                    <div
                                        class="p-4 !pt-0 z-10 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                        <h2 class="mt-4 text-3xl font-bold sm:text-3xl">{{ $row['destination']['nama'] ??'' }}
                                        </h2>
                                    </div>
                                    <div
                                        class="absolute z-20 w-full p-4 transition-opacity opacity-0 group-hover:opacity-100 sm:p-6 lg:p-8">
                                        <h3 class="mt-4 text-xl font-medium sm:text-2xl">{{ $row['destination']['nama'] ??'' }}
                                        </h3>
                                        <p
                                            class="mt-4 text-sm sm:text-base break-words w-full {{ $loop->first ? 'block' : 'hidden' }}">
                                            {{ \Illuminate\Support\Str::limit($row['destination']['deskripsi'] ??'', 100) }}
                                        </p>
                                        <p class="mt-4 font-bold">Read more</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="bg-secondary" style="height:40rem">
            <div class="text-white  xl:mx-56 xl:px-0">
                <h1 class="mb-4 text-4xl font-semibold text-center text-white pt-44">Berita Terkini</h1>
                <p class="mb-8 text-xl text-center">Nikmati informasi terkini dengan berita-berita terbaru seputar desa wisata di provinsi Bali.
                    Tetap terhubung dengan pesona Bali melalui ulasan mendalam dan laporan eksklusif yang menyajikan fakta akurat dan jelas tentang keindahan serta kearifan lokal desa wisata di Bali.</p>
            </div>
        </div>
        <div class="p-4 py-10 xl:mx-56 xl:px-0 -mt-80 ">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-3 ">
                <!-- Card 1 -->
                @foreach ($berita as $row)
                    <a href="/artikel/{{ $row['id'] }}" class="relative block text-white group"
                        style="height: 35rem">
                        <div class="relative flex items-end h-full transition-transform transform rounded-xl group-hover:-translate-y-2"
                            style="background-image: url('{{ env('APP_API_URL') }}/resource/berita/{{ $row['gambar'] }}'); background-size: cover; background-position: center;">
                            <div
                                class="absolute inset-0 transition-opacity bg-gradient-to-t from-black to-transparent opacity-20 group-hover:opacity-50">
                            </div>
                            <div
                                class="p-4 !pt-0 z-10 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
                                <h2 class="mt-4 text-3xl font-bold sm:text-3xl">{{ $row['judul'] }}</h2>
                            </div>
                            <div
                                class="absolute z-20 w-full p-4 transition-opacity opacity-0 group-hover:opacity-100 sm:p-6 lg:p-8">
                                <h3 class="mt-4 text-xl font-medium sm:text-2xl">{{ $row['judul'] }}</h3>
                                <p class="w-full mt-4 text-sm break-words sm:text-base">
                                    {{ \Illuminate\Support\Str::limit($row['isi_berita'], 100) }}
                                </p>
                                <p class="mt-4 font-bold">Read more</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="flex justify-center mt-5">
                <a href="/artikel"
                    class="px-8 py-2 mt-4 text-white transition-colors duration-300 rounded-full bg-primary-200 hover:bg-opacity-70">
                    Read More <i class="ml-5 fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="p-4 mt-12 xl:mx-56 xl:px-0 ">
            <div class="pb-10">
                <h1 class="mb-10 text-4xl font-bold text-center ">Untuk pengalaman yang lebih baik</h1>
                <div class="flex items-center justify-center w-full gap-10">
                    <div class="hidden mr-10 xl:block ">
                        <div class="flex justify-center gap-5">
                            <img src="{{ asset('img/dark.png') }}" class="" alt="">
                            <img src="{{ asset('img/dark-1.png') }}" class="" alt="">
                        </div>
                    </div>
                    <div class="flex justify-center gap-4">
                        <img src="{{ asset('img/logo_notext.png') }}" class="hidden h-32 sm:block " alt="">
                        <img src="{{ asset('img/Play Store.png') }}" class="h-32 " alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const slider = document.getElementById('scroll-container');
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2; // Adjust the multiplier for smoother or faster scrolling
            slider.scrollLeft = scrollLeft - walk;
        });

        // Prevent default drag behavior on images
        const images = slider.querySelectorAll('img');
        images.forEach(img => {
            img.addEventListener('dragstart', (e) => {
                e.preventDefault();
            });
        });
    </script>
@endsection
