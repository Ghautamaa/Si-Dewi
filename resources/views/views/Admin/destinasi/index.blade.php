@extends('Admin.layouts.main')

@section('main')
    @if (session()->has('message'))
        <div id="toast-success"
            class="fixed z-50 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 transition-all duration-500 ease-in-out transform translate-y-4 bg-white rounded-lg shadow opacity-0 dark:text-gray-400 dark:bg-gray-800 bottom-14 right-14"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="text-sm font-normal ms-3">{{ session('message') }}</div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
    <div class="mx-4">
        <h2 class="mb-3 font-bold tracking-tight text-gray-500 ">Destinasi / Table </h2>
        <div class="flex justify-between">
            <p class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white"> Destinasi Wisata </p>
            <a href="/admin/destinasi/create"
                class="text-white bg-primary-200 hover:bg-primary-100 focus:ring-4 focus:ring-teal-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-200 darl:hover:bg-primary-100  dark:focus:ring-teal-200 focus:outline-none ">Tambah
                +</a>
        </div>


       <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            @foreach ($destinasi as $row)
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="relative">
                    <button id="dropdownButton" data-dropdown-toggle="dropdown{{ $row['id'] }}"
                        class="absolute top-4 right-4 z-50 text-white  focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                        type="button">
                        <span class="sr-only">Open dropdown</span>
                        <svg class="w-[48px] h-[48px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2.8" d="M6 12h.01m6 0h.01m5.99 0h.01" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown{{ $row['id'] }}"
                        class="z-10 hidden text-base list-none bg-white border divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="" aria-labelledby="dropdownButton">
                            <li
                                class="text-sm font-medium text-gray-900 hover:text-white hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">
                                <a href="/admin/fasilitas/{{ $row['id'] }}" class="flex items-center p-2 group">
                                    <svg class="w-[18px] h-[18px] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="flex-1 ms-2 whitespace-nowrap">Fasilitas</span>
                                </a>
                            </li>

                            <li
                                class="text-sm font-medium text-blue-700 hover:text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                                <a href="/admin/review/{{ $row['id'] }}" class="flex items-center p-2 group">
                                    <svg class="w-[18px] h-[18px] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="flex-1 ms-2 whitespace-nowrap">Ulasan</span><span class="">{{ $row['non_reviews'] }}</span>
                                </a>
                            </li>

                            <li
                                class="text-sm font-medium text-yellow-400 hover:text-white hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                                <a href="/admin/destinasi/{{ $row['id'] }}/edit" class="flex items-center p-2 group">
                                    <svg class="w-[18px] h-[18px] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="flex-1 ms-2 whitespace-nowrap">Edit</span>
                                </a>
                            </li>
                            <li
                                class="text-sm font-medium text-red-700 group hover:text-white hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                <form action="/admin/destinasi/{{ $row['id'] }}" method="post" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="flex items-center p-2">
                                        <svg class="w-[18px] h-[18px] transition duration-75 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="flex-1 ms-2 whitespace-nowrap">Delete</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <a href="#">
                        <img class="w-full h-64 object-cover rounded-t-lg" src="{{ env('APP_API_URL') }}/resource/destinasiwisata/{{ $row['gambar'] }}"
                            alt="{{ $row['nama'] }}" />
                    </a>
                </div>
                <div class="h-48 m-5">
                    <a href="#">
                        <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $row['nama'] }}</h5>
                        <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-50000 dark:text-white">
                            {{ $row['kategori']['nama'] }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 break-words dark:text-gray-400">
                        {{ \Illuminate\Support\Str::limit($row['deskripsi'], 250) }}</p>
                </div>
                <div class="mx-5 mb-8">
                    <a href="#"
                        class="text-white bg-primary-200 hover:bg-primary-100 focus:ring-4 focus:ring-teal-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-200 darl:hover:bg-primary-100 dark:focus:ring-teal-200 focus:outline-none">
                        Selengkapnya
                    </a>
                </div>
            </div>
            @endforeach

        </div>

    </div>
@endsection

