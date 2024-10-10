@extends('Admin.layouts.main')

@section('main')
    
    <h1>berita show</h1>
    <div class="flex">

        <a href="/admin/berita" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">back</a>
        <a href="/admin/berita/{{$berita['id']}}/edit" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
        <form action="/admin/berita/{{$berita['id']}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="confirm('yakin')" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
        </form>
    </div>

    <h3>dibuat oleh desa {{$berita['id']}}</h3>
    <p>dipublis tanggal {{$berita['createdAt']}}</p>
    <p>diupdate tanggal {{$berita['updatedAt']}}</p>
    <div class="border p-3 mt-3">
        <h2>{{$berita['judul']}}</h2>
        <img src="{{$berita['gambar']}}" alt="{{$berita['judul']}}" width="300" height="200">
        <p>{{$berita['isi_berita']}}</p>
    </div>
@endsection