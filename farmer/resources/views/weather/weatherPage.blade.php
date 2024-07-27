@extends('layouts.app')

@section('carousel')

    @component('components.hero')

        @slot('backgroundImage', 'https://images.unsplash.com/photo-1454789476662-53eb23ba5907?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bmFzYSUyMHdlYXRoZXJ8ZW58MHx8MHx8fDA%3D')

        @slot('title', 'Stay Updated with the Latest Weather Forecasts')

        @slot('leadText', 'Get accurate and up-to-date weather information to plan your farming activities.')
        
        @slot('description', 'Our weather forecast service provides you with real-time updates on temperature, rain predictions, and more. Make informed decisions and optimize your farming operations with reliable weather data.')
    
        @section('heroContent')
        
       
        @endsection

    @endcomponent

@endsection



@section('content')


@endsection