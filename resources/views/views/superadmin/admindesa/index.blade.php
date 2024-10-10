@php
    use Carbon\Carbon;
@endphp
@extends('superadmin.layouts.main')
<style>

</style>
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
            <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
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
    {{-- @dd($admindesa) --}}

    {{-- Form --}}
    <div tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
        id="authentication-modal">
        <div class="relative w-full max-w-md max-h-full zoom-in">
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                    <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">
                        Tambah Petugas Desa
                    </h3>
                    <button type="button"
                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form class="p-4 md:p-5" action="/superadmin/admindesa" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <label for="id_akun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                            Akun
                            Petugas
                        </label>
                        <select id="id_akun" name="id_akun"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option hidden>Piih Akun</option>
                            @foreach ($akun as $row)
                                <option value="{{ $row['id'] }}">{{ $row['nama'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-5">
                        <label for="id_desawisata"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                            Desa Wisata</label>
                        <select id="id_desawisata" name="id_desawisata"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option hidden>Pilih Desa</option>
                            @foreach ($desawisata as $row)
                                <option value="{{ $row['id'] }}">{{ $row['nama'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    <button type="reset"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>
                </form>
            </div>
        </div>
    </div>


    {{-- Table --}}
    <div class="mx-4">
        <h2 class="mb-3 font-bold tracking-tight text-gray-500 ">Petugas / Table </h2>
        <div class="flex justify-between">
            <h1 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white"> Petugas Desa Wisata</h1>
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="text-white bg-primary-200 hover:bg-primary-100 focus:ring-4 focus:ring-teal-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-200 darl:hover:bg-primary-100  dark:focus:ring-teal-200 focus:outline-none ">Tambah
                +</button>
        </div>
        <div class="relative p-3 mt-5 overflow-x-auto bg-white border-gray-200 rounded-lg shadow">
            <table id="myTable"
                class="w-full text-sm text-left text-gray-500 table-fixed rtl:text-right dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                    <tr class="">
                        <th scope="col" class="w-20 px-2">
                            No
                        </th>
                        <th scope="col" class="w-1/5">
                            Desa Wisata
                        </th>
                        <th scope="col" class="w-1/5 ">
                            Akun
                        </th>
                        <th scope="col" class="w-1/5 ">
                            createdAt
                        </th>
                        <th scope="col" class="w-1/5 ">
                            updatedAt
                        </th>
                        <th scope="col" class="w-1/5 ">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admindesa as $row)
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="">
                                {{ $row['desa']['nama']??'' }}
                            </td>
                            <td class="">
                                {{ $row['akun']['nama'] ??''}}
                            </td>
                            @php
                                $created = Carbon::parse($row['createdAt']);
                                $updated = Carbon::parse($row['updatedAt']);
                                $formattedCreatedAt = $created->format('d F Y, H:i');
                                $formattedUpdatedAt = $updated->format('d F Y, H:i');
                            @endphp
                            <td class="">
                                {{ $formattedCreatedAt }}
                            </td>
                            <td class="">
                                {{ $formattedUpdatedAt }}
                            </td>
                            <td class="py-4 ">
                                <div class="flex items-center justify-center">
                                    {{-- <a href="/superadmin/desa/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">S</a> --}}
                                    <button data-modal-target="edit-modal{{ $row['id'] }}"
                                        data-modal-toggle="edit-modal{{ $row['id'] }}"
                                        class=" focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900"><svg
                                            class="w-6 h-6 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                                clip-rule="evenodd" />
                                        </svg></button>
                                    <form action="/superadmin/admindesa/{{ $row['id'] }}" method="post" class="delete-form"
                                        >
                                        @csrf
                                        @method('DELETE')
                                        <button type="button"
                                            class="delete-button mt-3 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><svg
                                                class="w-6 h-6 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                    clip-rule="evenodd" />
                                            </svg></button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        {{-- Edit --}}
                        <div tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
                            id="edit-modal{{ $row['id'] }}">
                            <div class="relative w-full max-w-md max-h-full zoom-in">
                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal Header -->
                                    <div
                                        class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                        <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">
                                            {{ $row['id_desawisata'] }}
                                        </h3>
                                        <button type="button"
                                            class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="edit-modal{{ $row['id'] }}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>

                                    <!-- Modal Form -->
                                    <form class="p-4 md:p-5" action="/superadmin/admindesa/{{ $row['id'] }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <!-- Akun Selection -->
                                        <div class="mb-5">
                                            <label for="id_akun"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                {{ $row['desa']['nama']??'' }}
                                            </label>
                                            <select id="id_akun" name="id_akun"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                @if (isset($row['id_akun']))
                                                    <option selected hidden value="{{ $row['id_akun'] }}">
                                                        {{ $row['akun']['nama'] ??'' }}</option>
                                                @else
                                                    <option selected hidden value="">Pilih Akun</option>
                                                @endif
                                                @foreach ($akun as $akunItem)
                                                    <option value="{{ $akunItem['id'] }}">{{ $akunItem['nama'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- Desa Wisata Selection -->
                                        <div class="mb-5">
                                            <label for="id_desawisata"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                Pilih Desa Wisata
                                            </label>
                                            <select id="id_desawisata" name="id_desawisata"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                @if (isset($row['id_desawisata']))
                                                    <option selected hidden value="{{ $row['id_desawisata'] }}">
                                                        {{ $row['desa']['nama']??'' }}</option>
                                                @else
                                                    <option selected hidden value="">Pilih Desa Wisata</option>
                                                @endif
                                                @foreach ($desawisata as $desaItem)
                                                    <option value="{{ $desaItem['id'] }}">{{ $desaItem['nama'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- Submit and Reset Buttons -->
                                        <div class="flex justify-end gap-2">
                                            <button type="submit"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Submit
                                            </button>
                                            <button type="reset"
                                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                Reset
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var toast = document.getElementById('toast-success');
                if (toast) {
                    // Animasi muncul
                    setTimeout(function() {
                        toast.classList.remove('opacity-0', 'translate-y-4');
                    }, 100); // Sedikit delay untuk memastikan animasi terlihat

                    // Animasi hilang setelah 5 detik
                    setTimeout(function() {
                        toast.classList.add('opacity-0', 'translate-y-4');
                        setTimeout(function() {
                            toast.remove();
                        }, 500); // Durasi yang sesuai dengan `transition-all duration-500`
                    }, 5000);
                }
            });
        </script>
    @endsection
