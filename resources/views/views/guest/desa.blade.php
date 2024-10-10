@extends('components.layout')

@section('main')
    <p>{{ $desa['nama'] }}</p>
    <h1>Destinasi</h1>
    <hr>
    <div class="mb-3">
        @foreach ($destinasi as $row)
            <a class="" href="/desa/{{ $desa['id'] }}/destinasi/{{ $row['id'] }}">
                <p>{{ $row['nama'] }}</p>
            </a>
        @endforeach
    </div>

    <h1>paket</h1>
    <hr>
    <div class="mb-3">
        @foreach ($paket as $row)
            <a class="" href="/desa/{{ $desa['id'] }}/paket/{{ $row['id'] }}">
                <p>{{ $row['nama'] }}</p>
            </a>
        @endforeach
    </div>

    <h1>produk</h1>
    <hr>
    <div class="mb-3">
        @foreach ($produk as $row)
            <a class="" href="/desa/{{ $desa['id'] }}/produk/{{ $row['id'] }}">
                <p>{{ $row['nama'] }}</p>
            </a>
        @endforeach
    </div>
@endsection
