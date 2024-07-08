<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>






@yield('container')

<body class="bg-slate-200">
    <div class="container-fluid ">
        {{-- Navbar start --}}
        @include('partials.navbar')
        {{-- Navbar End --}}

        {{-- content Start --}}
        {{-- artikel start --}}
        <div class="flex justify-center s:flex-col mt-20 sm:flex-row  mx-auto ">
            <div class="flex-1 md:ml-20 sm:ml-20 lg:ml-20 x2l:ml-44 mr-5 mb-0 rounded-lg mt-8 s:items-center s:justify-center s:mx-auto s:w-52 ">
                <div class="flex items-center mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900">List Berita</h5>
                </div>
                <div class="flow-root   ">
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate">
                                            artikel 1
                                        </p>
                                        <p class="text-md text-gray-500 truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis commodi ipsam quibusdam.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center ">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate">
                                            artikel 2
                                        </p>
                                        <p class="text-md text-gray-500 truncate">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate a sint pariatur.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate ">
                                            artikel 3
                                        </p>
                                        <p class="text-md text-gray-500 truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis rerum fugit at.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center ">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate ">
                                            artikel 4
                                        </p>
                                        <p class="text-md text-gray-500 truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dicta quia ipsam.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-3 pb-0 sm:pt-4">
                                <div class="flex items-center ">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate ">
                                            artikel 5
                                        </p>
                                        <p class="text-md text-gray-500 truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, ipsum magni! Unde!
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-3 pb-0 sm:pt-4">
                                <div class="flex items-center ">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate ">
                                            artikel 6
                                        </p>
                                        <p class="text-md text-gray-500 truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, ipsum magni! Unde!
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-3 pb-0 sm:pt-4">
                                <div class="flex items-center ">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-md font-medium text-gray-900 truncate ">
                                            artikel 7
                                        </p>
                                        <p class="text-md text-gray-500 truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, ipsum magni! Unde!
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
            </div>
            {{-- artikel end --}}

            {{-- card  start   --}}
            <div class="grid lg:grid-cols-2  sm:grid-rows-3 gap-y-5 gap-x-5 x2l:mr-44 lg:mr-20 sm:mr-20 ml-5 mt-9 sm:grid-cols-1 sm:auto-rows-min sm:overflow-scroll">
                <div class="mx-auto w-64 h-48 overflow-hidden">
                    <a href="#" class="">
                        <img class="rounded object-cover w-full h-full" src="{{ asset('storage/img/bg.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-64 h-48 overflow-hidden">
                    <a href="#" class="">
                        <img class="rounded object-cover w-full h-full" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-64 h-48 overflow-hidden">
                    <a href="#" class="">
                        <img class="rounded object-cover w-full h-full" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-64 h-48 overflow-hidden">
                    <a href="#" class="">
                        <img class="rounded object-cover w-full h-full" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-64 h-48 overflow-hidden">
                    <a href="#" class="">
                        <img class="rounded object-cover w-full h-full" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>
                <div class="mx-auto w-64 h-48 overflow-hidden">
                    <a href="#" class="">
                        <img class="rounded object-cover w-full h-full" src="{{ asset('storage/img/background.jpg') }}" alt="" />
                    </a>
                </div>

            </div>
        </div>
        {{-- card end --}}
        {{-- content End --}}
        
        {{-- footer start --}}

        <div class="mt-28">
            @include('partials.footer')
            
        </div>
        {{-- footer end --}}

    </div>

</body>

</html>
