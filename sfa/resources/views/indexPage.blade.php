@extends('layout.main')


@section('navbar')
    @include('layout.navbar_guest')
@endsection


@section('carousel')
    @include('layout.caro')
@endsection


@section('content')
    @include('layout.textArea')
@endsection


@section('jumbotron')
    @include('layout.jumbo')
@endsection
