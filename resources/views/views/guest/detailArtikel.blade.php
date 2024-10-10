@extends('guest.layouts.main')

@section('main')
    <div class="xl:mx-56 p-4 xl:px-0">
        <div class="drop-shadow text-justify mx-auto">
            <div class="sm:flex gap-8 ">
                {{-- artikel start --}}
                @include('guest.detailArtikel.recent_post')
                {{-- side --}}
                <div class="mb-2 mt-16 sm:w-1/5 ">
                    @include('guest.artikel.side')
                </div>
            </div>
        </div>
    </div>
@endsection
