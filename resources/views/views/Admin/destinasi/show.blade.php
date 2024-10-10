@extends('Admin.layouts.main')

@section('main')
    <div class="mx-4">
        <h2 class="mb-3 font-bold tracking-tight text-gray-500">Destinasi Wisata / Info</h2>

        <div class="flex justify-between">
            <p class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $destinasi['nama'] }}</p>
            <a href="/admin/destinasi/{{ $destinasi['id'] }}/edit"
                class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>

        </div>
        <h2 class="mb-5 font-bold tracking-tight text-gray-500">{{ $destinasi['id_kategoridestinasi'] }}</h2>
        {{-- <h3>dibuat oleh desa {{ $destinasi['id_desawisata'] }}</h3> --}}
        {{-- <p>type {{ $destinasi['id_kategoridestinasi'] }}</p> --}}
        <div
            class="mt-8 mb-5 block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 max-w-full overflow-hidden">
            <img src="{{ $destinasi['gambar'] }}" alt="{{ $destinasi['nama'] }}" width="300" height="200"
                class="block mx-auto">
            <div class="mt-5 max-w-full">
                <p class="break-words">{{ $destinasi['deskripsi'] }}</p>
                <p class="flex justify-end">{{ $destinasi['updatedAt'] }}</p>
            </div>
        </div>
        <div class="relative overflow-x-auto mt-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            rating
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            review
                        </th>
                        {{-- <th scope="col" class="px-6 py-3">
                            createdAt
                        </th>
                        <th scope="col" class="px-6 py-3">
                            updatedAt
                        </th> --}}
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($review as $row)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $row['id_akun'] }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <img src="{{ $row['rating'] }}" alt="{{ $row['gambar'] }}">
                            </td>
                            <td class="px-6 py-4">
                                {{ $row['review'] }}
                            </td>

                            {{-- <td class="px-6 py-4">
                                {{ $row['createdAt'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row['updatedAt'] }}
                            </td> --}}
                            <td class="px-6 py-4">
                                <div class="flex justify-items-center">
                                    {{-- <a href="/superadmin/desa/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">S</a> --}}
                                    <a href="/admin/paket/{{ $row['id'] }}/edit"
                                        class=" focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900"><svg
                                            class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                                clip-rule="evenodd" />
                                        </svg></a>
                                    <form action="/admin/paket/{{ $row['id'] }}" method="post"
                                        onsubmit="return confirm('yakin')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><svg
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
