@extends('layouts.app')

@section('title', 'Home')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/trangchu.css') }}">
@endpush

@section('content')
<div class="container">
    {{-- <div class="row"> --}}
        {{-- <div class="col-md-8 col-md-offset-2"> --}}
            {{-- <div class="panel panel-default"> --}}
                <h1 class="h">Quản lý trường đại học</h1>
                <div class="grid-container">
                    <img src="{{ asset('home/img/khoa.png') }}" alt="image" class="khoa">
                    <img src="{{ asset('home/img/hocsinh.png') }}" alt="image" class="hocsinh">
                    <img src="{{ asset('home/img/quanly.jpg') }}" alt="image" class="quanly">
                    <img src="{{ asset('home/img/giaovien.png') }}" alt="image" class="giaovien">
                    <img src="{{ asset('home/img/books.jpg') }}" alt="image" class="khoahoc">
                </div>
            {{-- </div> --}}
        {{-- </div> --}}
    {{-- </div> --}}
{{-- </div> --}}
@endsection
