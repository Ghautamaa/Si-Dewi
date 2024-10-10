@extends('components.layoutlogin')
<style>

</style>
@section('main')
    @if (session()->has('message'))
        <div id="toast-success"
            class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
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

    <img class="h-screen w-screen object-cover z-0 absolute" src="{{ asset('img/klungkung2.jpg') }}" alt="Background Image">

    <div class="grid w-full h-full grid-cols-1 sm:grid-cols-2">
        <!-- Background Image with Logo -->
        <div class="relative z-0 w-full h-screen object-cover">
            <div class="p-5 absolute top-4 left-4 z-10 flex gap-4">
                <img src="{{ asset('img/logo_notext.png') }}" class="h-20" alt="Logo" />
                <span class="self-center text-white text-4xl font-semibold grechen-fuemen-regular whitespace-nowrap">Si
                    Dewi</span>
            </div>
            {{-- <img class="h-full w-full object-cover" src="{{ asset('img/klungkung2.jpg') }}" alt="Background Image"> --}}
        </div>
        {{-- <div
            class="absolute inset-0  sm:relative sm:w-full m-10 flex items-center justify-center bg-white bg-opacity-80 rounded-3xl">
            <div class="relative flex justify-center items-center ">
                <div class="w-fit">
                    <p class="mx-1 mb-24 text-6xl font-semibold text-gray-900 font-poppins dark:text-white">Login</p>
                    <form class="mt-7" action="/dologin" method="POST">
                        @csrf
                        <div class="mb-14">
                            <input type="email" name="email" id="email"
                                class="block w-full py-2 text-xl placeholder-gray-500 bg-transparent border-none focus:ring-transparent focus:border-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Email" required />
                            <hr class="h-1 mx-4 bg-black border-0 dark:bg-gray-700">
                        </div>
                        <div class="relative mb-5">
                            <input type="password" name="password" id="password"
                                class="block w-full p-4 py-2 pr-12 text-xl placeholder-gray-500 bg-transparent border-none focus:ring-transparent focus:border-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                placeholder="Password" required />
                            <hr class="h-1 mx-4 mt-2 bg-black border-0 dark:bg-gray-700">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                                <i id="togglePassword" class="cursor-pointer">
                                    <svg id="eyeIcon" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <svg id="eyeSlashIcon" class="hidden w-6 h-6 text-gray-800 dark:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit"
                                class="px-10 py-3 mt-10 text-2xl font-medium text-center text-white shadow-lg rounded-xl bg-primary-200 hover:bg-primary-100 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        <!-- Login Form for larger screens -->
        <!-- <div
            class="hidden m-10 bg-opacity-90 rounded-3xl sm:flex z-10 items-center shadow-lg justify-center bg-white sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full max-w-lg mx-7">
                <p class="mx-1 mb-24 -mt-24 text-6xl font-semibold text-gray-900 font-poppins dark:text-white">Login</p>
                <form class="mt-7" action="/dologin" method="POST">
                    @csrf
                    <div class="mb-14">
                        <input type="email" name="email" id="email"
                            class="block w-full py-2 text-xl placeholder-gray-500 bg-transparent border-none focus:ring-transparent focus:border-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Email" required />
                        <hr class="h-1 mx-4 bg-black border-0 dark:bg-gray-700">
                    </div>
                    <div class="relative mb-5">
                        <input type="password" name="password" id="password"
                            class="block w-full p-4 py-2 pr-12 text-xl placeholder-gray-500 bg-transparent border-none focus:ring-transparent focus:border-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Password" required />
                        <hr class="h-1 mx-4 mt-2 bg-black border-0 dark:bg-gray-700">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <i id="togglePassword" class="cursor-pointer">
                                <svg id="eyeIcon" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <svg id="eyeSlashIcon" class="hidden w-6 h-6 text-gray-800 dark:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit"
                            class="px-10 py-3 mt-10 text-2xl font-medium text-center text-white shadow-lg rounded-xl bg-primary-200 hover:bg-primary-100 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">LOGIN</button>
                    </div>
                </form>
            </div>
        </div> -->

        <!-- Login Form for smaller screens -->
        <div class=" z-10 absolute inset-0 flex items-center justify-center m-5">
            <div class="w-full max-w-md sm:max-w-2xl bg-white bg-opacity-80 sm:p-12 lg:p-20 p-8 rounded-3xl">
                <p class="mb-8 text-4xl font-semibold text-gray-900 font-poppins dark:text-white">Login</p>
                <form action="/dologin" method="POST">
                    @csrf
                    <div class="mb-6">
                        <input type="email" name="email" id="email"
                            class="block w-full py-2 text-xl placeholder-gray-500 bg-transparent border-none focus:ring-transparent focus:border-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Email" required />
                        <hr class="h-1 mx-4 bg-black border-0 dark:bg-gray-700">
                    </div>
                    <div class="relative mb-6">
                        <input type="password" name="password" id="password"
                            class="block w-full p-4 py-2 pr-12 text-xl placeholder-gray-500 bg-transparent border-none focus:ring-transparent focus:border-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Password" required />
                        <hr class="h-1 mx-4 mt-2 bg-black border-0 dark:bg-gray-700">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <i id="togglePassword" class="cursor-pointer">
                                <svg id="eyeIcon" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                <svg id="eyeSlashIcon" class="hidden w-6 h-6 text-gray-800 dark:text-white"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-10 py-3 mt-4 text-2xl font-medium text-center text-white shadow-lg rounded-xl bg-primary-200 hover:bg-primary-100 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        const eyeIcon = document.querySelector('#eyeIcon');
        const eyeSlashIcon = document.querySelector('#eyeSlashIcon');

        togglePassword.addEventListener('click', function() {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle the eye and eye slash icon
            eyeIcon.classList.toggle('hidden');
            eyeSlashIcon.classList.toggle('hidden');
        });
    </script>
@endsection
