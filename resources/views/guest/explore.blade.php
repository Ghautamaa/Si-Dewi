<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container-fluid h-screen">
        @include('partials.navbar')

        <div class="form-container py-2">
            <form class="flex items-center max-w-screen px-24 mt-24 mx-auto">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    </div>
                    <input type="text" id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Village Destination Here..." required />
                </div>
                <button type="submit"
                    class="p-2.5 ms-2 text-sm font-medium text-white bg-secondary rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
        </div>

        <div class="container mx-auto px-24 mt-5">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('storage/img/tanahlot.jpg') }}" alt="" />
                        </a>
                        <div class="p-6">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nama Desa</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, saepe ea, magnam veniam adipisci, officia fugit fuga reiciendis minus dolores dolore! Error recusandae vitae delectus? Corrupti maiores quo fugiat?</p>
                        </div>
                    </div>
                </div>
                <!-- Ulangi div di atas untuk 3 kartu lagi -->
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('storage/img/tanahlot.jpg') }}" alt="" />
                        </a>
                        <div class="p-6">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nama Desa</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, saepe ea, magnam veniam adipisci, officia fugit fuga reiciendis minus dolores dolore! Error recusandae vitae delectus? Corrupti maiores quo fugiat?</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('storage/img/tanahlot.jpg') }}" alt="" />
                        </a>
                        <div class="p-6">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nama Desa</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, saepe ea, magnam veniam adipisci, officia fugit fuga reiciendis minus dolores dolore! Error recusandae vitae delectus? Corrupti maiores quo fugiat?</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 " style="overflow: hidden;>
                        <a href="#">
                            <img class="rounded-t-lg" src="{{ asset('storage/img/tanahlot.jpg') }}" alt="" />
                        </a>
                        <div class="p-6">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nama Desa</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam excepturi, saepe ea, magnam veniam adipisci</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    @include('partials.footer')
</body>
<script>
    AOS.init();

</script>

</html>
