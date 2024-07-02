<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    {{-- container start --}}
    <div class="container-fluid h-screen">
        {{-- navbar start --}}
        
        @include('partials.navbar')

        {{-- navbar end --}}
        {{-- background --}}
        <div class="mix-blend-screen inset-0 bg-black opacity-70 mt-16 sm:mt-0  "> </div>
            <img src="{{ asset('storage/img/testpict.png') }}" alt="" class=" inset-0 w-full sm:h-full object-cover"  style="width: 100vw;">       
        
        {{-- background --}}
        {{-- content --}}
        
            <div class=" sm:container mt-36 text-justify px-1 w-full mx-auto ">
                <div class="">
                    <div class="">
                        <h1 class="text-4xl font-bold">Desa Kintamani</h1>
                    </div>
                    <div class="text-xl text-gray-600 mb-1">
                        Kategori : <span class="text-green-700">Desa Maju</span>
                        <br>
                    </div>
                    <div class="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti cupiditate, culpa ipsa cum inventore,
                        hic impedit in iste tempora voluptatum dolores. Maiores aut incidunt quia facilis, eius vero hic labore
                        unde, aperiam ullam placeat! Harum distinctio aliquam voluptatibus, delectus, deleniti, necessitatibus
                        error dolorum culpa esse perferendis consectetur a incidunt ratione nobis aperiam magni qui ab sequi quo
                        similique voluptatem consequatur dicta? Rerum architecto recusandae vitae esse atque fuga error quidem
                        minus, voluptates fugit. Expedita ut illum unde itaque excepturi, ducimus laborum perspiciatis
                        dignissimos. Eveniet, aliquam ullam voluptatum repudiandae suscipit maiores quos voluptatibus eum ipsam
                        quas deserunt rem iure consequatur at!
                    </div>
                </div>
                <br>
                <div class="w-full h-96" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5144.066257606532!2d115.15765092578037!3d-8.800860606502953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244c13ee9d753%3A0x6c05042449b50f81!2sPoliteknik%20Negeri%20Bali!5e0!3m2!1sid!2sid!4v1719463096558!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div>
                {{-- tab --}}
                    <div class="mb-4 mt-8 top-0  border-b border-gray-200 dark:border-gray-700 sm:container  text-justify px-1 w-full mx-auto ">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-green-600 hover:text-green-600 dark:text-green-500 dark:hover:text-green-500 border-green-600 dark:border-green-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="destinasi-styled-tab" data-tabs-target="#styled-destinasi" type="button" role="tab" aria-controls="destinasi" aria-selected="false">Destinasi</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="akomodasi-styled-tab" data-tabs-target="#styled-akomodasi" type="button" role="tab" aria-controls="akomodasi" aria-selected="false">Akomodasi</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="produk-styled-tab" data-tabs-target="#styled-produk" type="button" role="tab" aria-controls="produk" aria-selected="false">Produk</button>
                            </li>
                            <li role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="pawi-styled-tab" data-tabs-target="#styled-pawi" type="button" role="tab" aria-controls="pawi" aria-selected="false">Paket Wisata</button>
                            </li>
                        </ul>
                    </div>
                    <div>
                    <div id="default-styled-tab-content" class="sm:container  text-justify px-1 w-full mx-auto bg-secondary">
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 " id="styled-destinasi" role="tabpanel" aria-labelledby="destinasi-tab">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg" src="{{ asset('storage/img/testpict.png') }}" alt="" />
                                    </a>
                                    <div class="p-5">
                                        <a href="#">
                                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Air Terjun Kehidupan</h5>
                                        </a>
                                        <a href="#">
                                            <h5 class="mb-2 text-sm font-bold tracking-tight text-green-700 dark:text-white">Wisata Alam</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg" src="{{ asset('storage/img/testpict.png') }}" alt="" />
                                    </a>
                                    <div class="p-5">
                                        <a href="#">
                                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Air Terjun Kehidupan</h5>
                                        </a>
                                        <a href="#">
                                            <h5 class="mb-2 text-sm font-bold tracking-tight text-green-700 dark:text-white">Wisata Alam</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg" src="{{ asset('storage/img/testpict.png') }}" alt="" />
                                    </a>
                                    <div class="p-5">
                                        <a href="#">
                                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Air Terjun Kehidupan</h5>
                                        </a>
                                        <a href="#">
                                            <h5 class="mb-2 text-sm font-bold tracking-tight text-green-700 dark:text-white">Wisata Alam</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg" src="{{ asset('storage/img/testpict.png') }}" alt="" />
                                    </a>
                                    <div class="p-5">
                                        <a href="#">
                                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Air Terjun Kehidupan</h5>
                                        </a>
                                        <a href="#">
                                            <h5 class="mb-2 text-sm font-bold tracking-tight text-green-700 dark:text-white">Wisata Alam</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-akomodasi" role="tabpanel" aria-labelledby="akomodasi-tab">
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <a href="#">
                                            <img class="rounded-t-lg" src="{{ asset('storage/img/testpict.png') }}" alt="" />
                                        </a>
                                        <div class="p-5">
                                            <a href="#">
                                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Air Terjun Kehidupan</h5>
                                            </a>
                                            <a href="#">
                                                <h5 class="mb-2 text-sm font-bold tracking-tight text-green-700 dark:text-white">Wisata Alam</h5>
                                            </a>
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Read more
                                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                    </svg>
                                                </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-produk" role="tabpanel" aria-labelledby="produk-tab">
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                                    <a href="#">
                                                        <img class="rounded-t-lg" src="{{ asset('storage/img/testpict.png') }}" alt="" />
                                                    </a>
                                                <div class="p-5">
                                                    <a href="#">
                                                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Air Terjun Kehidupan</h5>
                                                    </a>
                                                    <a href="#">
                                                        <h5 class="mb-2 text-sm font-bold tracking-tight text-green-700 dark:text-white">Wisata Alam</h5>
                                                    </a>
                                                    <p class="mb-3  font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                                    <div class="flex items-center justify-between">
                                                        <span class="text-xl font-bold text-gray-900 dark:text-white">Rp 599.000</span>
                                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Read more
                                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                        </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                        </div>
                                    </div>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-pawi" role="tabpanel" aria-labelledby="pawi-tab">
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                                <a href="#">
                                                    <img class="rounded-t-lg" src="{{ asset('storage/img/testpict.png') }}" alt="" />
                                                </a>
                                            <div class="p-5">
                                                <a href="#">
                                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Air Terjun Kehidupan</h5>
                                                </a>
                                                <a href="#">
                                                <h5 class="mb-2 text-sm font-bold tracking-tight text-green-700 dark:text-white">Wisata Alam</h5>
                                                </a>
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                                <div class="flex items-center justify-between">
                                                        <span class="text-xl font-bold text-gray-900 dark:text-white">Rp 599.000</span>
                                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Read more
                                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                                        </svg>
                                                        </a>
                                                </div>
                                            </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                {{-- tab --}}

            </div>
        {{-- content end --}}

    @include('partials.footer')
    {{-- container end --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>