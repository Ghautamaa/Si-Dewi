@extends('guest.layouts.main')
@section('main')
    <div class="inset-0 bg-black opacity-70"> </div>
    <img src="{{ env('APP_API_URL') }}/resource/desawisata/{{ $desa['gambar'] }}" alt=""
        class="object-cover w-full  " style="height:100vh;">
    {{-- background --}}
    {{-- content --}}
    <div class="p-4 mt-6 xl:mx-56 xl:px-0 ">
        <div class="gap-6 sm:flex">
            @include('guest.desa.deskripsi')

            <div class="sm:w-2/6 ">
                @include('guest.desa.contact')
                @include('guest.desa.map')
            </div>
        </div>
        {{-- tab --}}
        @include('guest.desa.nav_tab')

        <div id="default-styled-tab-content ">
            @include('guest.desa.tab_destinasi')
            @include('guest.desa.tab_akomodasi')
            @include('guest.desa.tab_produk')
            @include('guest.desa.tab_paket')
        </div>
    </div>
    {{-- tab --}}
@endsection
