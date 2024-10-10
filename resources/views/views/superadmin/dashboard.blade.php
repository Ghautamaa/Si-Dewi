@extends('superadmin.layouts.main')

@section('main')
    <div class="mx-4 mt-20">
        <h2 class="mb-3 font-bold tracking-tight text-gray-500 ">Admin / Dashboard </h2>
        <div class="flex justify-between">
            <h1 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white"> Dashboard</h1>
        </div>
        <div class="flex gap-6 mt-10 drop-shadow-md">
            <div href="#"
                class="flex gap-5 p-3 bg-white border border-gray-200 rounded-lg shadow w-52 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z"
                        clip-rule="evenodd" />
                </svg>

                <div class="flex flex-col">
                    <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $desa_count }}
                    </h5>
                    <p class="mb-2 text-base tracking-tight text-gray-600 dark:text-white">Total Desa</p>
                </div>

            </div>
            <div href="#"
                class="flex gap-5 p-3 bg-white border border-gray-200 rounded-lg shadow w-52 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z" />
                </svg>
                <div class="flex flex-col">
                    <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $destinasi_count }}
                    </h5>
                    <p class="mb-2 text-base tracking-tight text-gray-600 dark:text-white">Total Destinasi</p>
                </div>
            </div>
        </div>



        {{-- <div class="">
            <p>count desa di Badung: {{ $desa_per_kabupaten['Badung'] }}</p>
            <p>count desa di Bangli: {{ $desa_per_kabupaten['Bangli'] }}</p>
            <p>count desa di Jembrana: {{ $desa_per_kabupaten['Jembrana'] }}</p>
            <p>count desa di Klungkung: {{ $desa_per_kabupaten['Klungkung'] }}</p>
            <p>count desa di Karangasem: {{ $desa_per_kabupaten['Karangasem'] }}</p>
            <p>count desa di Gianyar: {{ $desa_per_kabupaten['Gianyar'] }}</p>
            <p>count desa di Tabanan: {{ $desa_per_kabupaten['Tabanan'] }}</p>
            <p>count desa di Denpasar: {{ $desa_per_kabupaten['Denpasar'] }}</p>
            <p>count desa di Buleleng: {{ $desa_per_kabupaten['Buleleng'] }}</p>
        </div> --}}
        <div class="grid w-full h-full gap-10 mt-10 sm:grid-cols-3">
            <div class="h-full p-6 bg-white drop-shadow-xl rounded-xl">
                <canvas id="myChart"></canvas>
            </div>
            <div class="hidden p-6 bg-white sm:block sm:col-span-2 drop-shadow-xl rounded-xl">
                <canvas class="h-full" id="myChart2"></canvas>
            </div>
        </div>
        <div class="grid w-full h-full gap-10 mt-10 sm:grid-cols-3">
            <div class="w-full col-span-2 p-6 bg-white h-fit drop-shadow-xl rounded-xl">
                <h1 class="my-5 text-3xl font-semibold text-center">Destinasi Dengan Review Terbaik</h1>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">

                    @foreach ($review as $index => $row)
                        <a href="/desa/{{ $row['destination']['id_desawisata'] ?? '' }}/destinasi/{{ $row['destination']['id'] ?? '' }}"
                            class="relative block text-white group" style="height:20rem">
                            <div class="relative flex items-end h-full transition-transform transform shadow-lg rounded-xl group-hover:-translate-y-2"
                                style="background-image: url('{{ env('APP_API_URL') }}/resource/destinasiwisata/{{ $row['destination']['gambar'] ?? '' }}'); background-size: cover; background-position: center;">
                                <div class="absolute flex p-1 m-2 text-xl font-bold text-yellow-500l top-5 right-5">
                                    @php

                                        // Asumsikan averageRating = 3.8
                                        $rating = round($row['averageRating'] * 2) / 2; // Membulatkan ke 0.5 terdekat
                                        $fullStars = floor($rating); // Mendapatkan jumlah bintang penuh

                                        $emptyStars = 5 - $fullStars;
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
                                    <h2 class="mt-4 text-3xl font-bold sm:text-3xl">{{ $row['destination']['nama'] ?? '' }}
                                    </h2>
                                </div>
                                <div
                                    class="absolute z-20 w-full p-4 transition-opacity opacity-0 group-hover:opacity-100 sm:p-6 lg:p-8">
                                    <h3 class="mt-4 text-xl font-medium sm:text-2xl">{{ $row['destination']['nama'] ?? '' }}
                                    </h3>
                                    <p
                                        class="mt-4 text-sm sm:text-base break-words w-full {{ $loop->first ? 'block' : 'hidden' }}">
                                        {{ \Illuminate\Support\Str::limit($row['destination']['deskripsi'] ?? '', 30) }}
                                    </p>
                                    <p class="mt-4 font-bold">Read more</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="w-full h-full p-6 bg-white drop-shadow-xl rounded-xl">
                <h1 class="my-5 text-3xl font-semibold text-center">Berita Terbaru</h1>
                <div class="grid grid-cols-1 gap-6 ">
                    <!-- Card 1 -->
                    @foreach ($berita as $row)
                        <a href="/artikel/{{ $row['id'] }}" class="relative block text-white group"
                            style="height: 12rem">
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
                                        {{ \Illuminate\Support\Str::limit($row['isi_berita'], 30) }}
                                    </p>
                                    <p class="mt-4 font-bold">Read more</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [
                    'Badung',
                    'Bangli',
                    'Jembrana',
                    'Klungkung',
                    'Karangasem',
                    'Gianyar',
                    'Tabanan',
                    'Denpasar',
                    'Buleleng',
                ],
                datasets: [{
                    label: 'Banyak Desa per Kabupaten',
                    data: [
                        {{ $desa_per_kabupaten['Badung'] }},
                        {{ $desa_per_kabupaten['Bangli'] }},
                        {{ $desa_per_kabupaten['Jembrana'] }},
                        {{ $desa_per_kabupaten['Klungkung'] }},
                        {{ $desa_per_kabupaten['Karangasem'] }},
                        {{ $desa_per_kabupaten['Gianyar'] }},
                        {{ $desa_per_kabupaten['Tabanan'] }},
                        {{ $desa_per_kabupaten['Denpasar'] }},
                        {{ $desa_per_kabupaten['Buleleng'] }},
                    ],
                    backgroundColor: [
                        '#1E4E58',
                        '#00C2CC',
                        '#CD852f',
                        '#000080',
                        '#FF0000',
                        '#00AEEF',
                        '#008000',
                        '#800080',
                        '#FFA500',
                    ],
                    borderColor: [
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                        '#ffffff',
                    ],
                    borderWidth: 2,
                    hoverOffset: 8,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.raw !== null) {
                                    label += context.raw;
                                }
                                return label;
                            }
                        }
                    },
                    title: {
                        display: true,
                        text: 'Banyak Desa per Kabupaten di Bali',
                        font: {
                            size: 18
                        }
                    }
                }
            }
        });
    </script>
    <script>
        const bar = document.getElementById('myChart2').getContext('2d');
        new Chart(bar, {
            type: 'bar',
            data: {
                labels: [
                    'Badung',
                    'Bangli',
                    'Jembrana',
                    'Klungkung',
                    'Karangasem',
                    'Gianyar',
                    'Tabanan',
                    'Denpasar',
                    'Buleleng',
                ],
                datasets: [{
                    label: 'Banyak Desa per Kabupaten',
                    data: [
                        {{ $desa_per_kabupaten['Badung'] }},
                        {{ $desa_per_kabupaten['Bangli'] }},
                        {{ $desa_per_kabupaten['Jembrana'] }},
                        {{ $desa_per_kabupaten['Klungkung'] }},
                        {{ $desa_per_kabupaten['Karangasem'] }},
                        {{ $desa_per_kabupaten['Gianyar'] }},
                        {{ $desa_per_kabupaten['Tabanan'] }},
                        {{ $desa_per_kabupaten['Denpasar'] }},
                        {{ $desa_per_kabupaten['Buleleng'] }},
                    ],
                    backgroundColor: [
                        '#1E4E58',
                        '#00C2CC',
                        '#CD852f',
                        '#000080',
                        '#FF0000',
                        '#00AEEF',
                        '#008000',
                        '#800080',
                        '#FFA500',
                    ],
                    borderColor: [
                        '#1E4E58',
                        '#00C2CC',
                        '#CD852f',
                        '#000080',
                        '#FF0000',
                        '#00AEEF',
                        '#008000',
                        '#800080',
                        '#FFA500',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    },
                    title: {
                        display: true,
                        text: 'Banyak Desa per Kabupaten di Bali',
                        font: {
                            size: 18
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.raw !== null) {
                                    label += context.raw;
                                }
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Kabupaten'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Desa'
                        },
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });
    </script>
@endsection
