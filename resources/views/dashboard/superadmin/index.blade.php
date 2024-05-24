@extends('partials.main')

@section('container')
<h1>Halaman Dashboard</h1>
@if (session()->has('message'))
    {{session('message')}}
@endif
{{-- 
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($akun as $row)
        <tr>
            <th>{{$loop->iteration}}</th>
            <td>{{$row['nama']}}</td>
            <td>{{$row['role']}}</td>
        </tr>
        @endforeach
    </tbody>
</table> --}}


@endsection