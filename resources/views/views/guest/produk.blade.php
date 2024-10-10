@extends('guest.layouts.main')
@section('main')
    <div class="inset-0 bg-black opacity-70"> </div>
    <img src="{{ env('APP_API_URL') }}/resource/produk/{{ $produk['gambar'] }}" alt="{{ $produk['nama'] }}"
    class=" bg-slate-500 -mt-20 inset-0 w-full  object-cover" style="height: 50rem">
    {{-- background --}}
    {{-- content --}}
    <div class="xl:mx-56 p-4 xl:px-0">
    <div class=" -mt-20 drop-shadow text-justify  mx-auto">
        <div class="sm:flex gap-6">
            {{-- Deskripsi produk --}}
            @include('guest.produk.deskripsi')
            {{-- Card Kanan --}}
            <div class="mb-2  sm:w-2/6 ">
                @include('guest.produk.harga')
                {{-- produk Lainnya --}}
                @include('guest.produk.produk_lainnya')
            </div>
        </div>
    </div>
    </div>
@endsection
