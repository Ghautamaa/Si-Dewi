@extends('guest.layouts.main')

@section('main')
        <div class="inset-0 bg-black opacity-70"> </div>
        <img src="{{ env('APP_API_URL') }}/resource/destinasiwisata/{{ $destinasi['gambar'] }}"
        alt="{{ $destinasi['nama'] }}"
        class="bg-slate-500 inset-0 w-full h-auto max-w-full object-cover md:w-1/2 lg:w-1/3"
        style="max-height: 50rem;">
        {{-- background --}}
        {{-- content --}}
        <div class="xl:mx-56 p-4 xl:px-0">
        <div class=" -mt-20 drop-shadow text-justify mx-auto">
            <div class="sm:flex gap-8 ">
                {{-- Deskripsi Destinasi --}}
                @include('guest.destinasi.deskripsi')
                {{-- Card Kanan --}}
                <div class="mb-2 sm:w-2/5 ">
                    {{-- Rating --}}
                   @include('guest.destinasi.rating')
                    {{-- Destinasi Lainnya --}}
                   @include('guest.destinasi.destinasi_lainnya')
                </div>
            </div>
        </div>
    </div>
@endsection
