@extends('Admin.layouts.main')

@section('main')

    <h1 class="text-4xl font-bold px-10 pt-5">Selamat datang  </h1>
    <p class="text-6xl font-bold px-10 py-2">{{request()->session()->get('nama')}}</p>
@endsection
