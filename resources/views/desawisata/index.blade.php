@extends('partials.main')

@section('container')

@if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<button href="/desawisata/create" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add+</button>

<div class="container">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama Desa</th>
                    <th scope="col" class="px-6 py-3">alamat</th>
                    <th scope="col" class="px-6 py-3">gambar</th>
                    <th scope="col" class="px-6 py-3">deskripsi</th>
                    <th scope="col" class="px-6 py-3">maps</th>
                    <th scope="col" class="px-6 py-3">kategori</th>
                    <th scope="col" class="px-6 py-3">kabupaten</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($desawisata as $row)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$loop->iteration}}    
                    </th>
                    <td class="px-6 py-4">
                        {{$row['nama']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row['alamat']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row['gambar']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row['deskripsi']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row['maps']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row['kategori']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$row['kabupaten']}}
                    </td>
                    <td class="px-6 py-4">
                        <a href=""  class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <form action="/desawisata/{{$row['id']}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>

@endsection