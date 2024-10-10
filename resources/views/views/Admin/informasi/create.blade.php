@extends('Admin.layouts.main')

@section('main')
    <h2 class="ms-4 mb-3  font-bold tracking-tight text-gray-500 ">Profil Desa / Tambah </h2>
    <p class="ms-4 text-3xl font-semibold tracking-tight text-gray-900 dark:text-white"> Tambah Informasi Desa </p>
    <form class="mx-auto" action="/admin/informasi" method="POST">
        @csrf
        <div
            class="mx-4 mt-8 mb-5    block  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Contact </p>
            <hr class="h-px my-4  bg-gray-200 border-0 dark:bg-gray-700">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
                <div class="mb-1">
                    <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                        Telephone</label>
                    <input type="text" name="no_telp" id="no_telp"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                </div>
                <div class="mb-1">
                    <label for="no_wa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                        Whatsapp</label>
                    <input type="text" name="no_wa" id="no_wa"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                </div>
            </div>
            <div class="mb-5 mt-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="text" name="email" id="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
            </div>
        </div>
        <div
            class="mx-4 mt-8 mb-5    block  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <p class="text-xl font-bold tracking-tight text-gray-900 dark:text-white ">Social Media </p>
            <hr class="h-px my-4  bg-gray-200 border-0 dark:bg-gray-700">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
                <div class="mb-1">
                    <label for="facebook"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facebook</label>
                    <input type="text" name="facebook" id="facebook"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                </div>
                <div class="mb-1">
                    <label for="instagram"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instagram</label>
                    <input type="text" name="instagram" id="instagram"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                </div>
            </div>
            <div class="mb-5 mt-4">
                <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">website</label>
                <input type="text" name="website" id="website"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
            </div>
        </div>
        <div class="ms-4">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            <button type="reset"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>
        </div>
    </form>
@endsection
