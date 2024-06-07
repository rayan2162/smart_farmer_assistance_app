@extends('layout.main')

@section('navbar')
    @include('layout.navbar')
@endsection


@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://source.unsplash.com/yellow-round-fruits-on-tree-BafVsMpoSF0')
        @slot('title', 'Stay Updated with the Latest Weather Forecasts')
        @slot('leadText', 'Get accurate and up-to-date weather information to plan your farming activities.')
        @slot('description', 'Our weather forecast service provides you with real-time updates on temperature, rain predictions, and more. Make informed decisions and optimize your farming operations with reliable weather data.')
    @endcomponent
@endsection



@section('content')
    @include('./demoText')
@endsection