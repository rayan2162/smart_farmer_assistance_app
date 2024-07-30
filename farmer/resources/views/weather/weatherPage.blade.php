@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1454789476662-53eb23ba5907?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8bmFzYSUyMHdlYXRoZXJ8ZW58MHx8MHx8fDA%3D')
        @slot('title', 'Stay Updated with the Latest Weather Forecasts')
        @slot('leadText', 'Get accurate and up-to-date weather information to plan your farming activities.')
        @slot('description', 'Our weather forecast service provides you with real-time updates on temperature, rain predictions, and more. Make informed decisions and optimize your farming operations with reliable weather data.')
    
        @section('heroContent')
        
        <div class="container mt-5">
            <h1 class="text-white">Today's Weather</h1>
            <div id="today-weather">
                @if(isset($todayWeather))
                    <h4 class="text-white">Temperature: {{ $todayWeather['hourly']['temperature_2m'][0] ?? 'N/A' }}°C</p>
                    <h4 class="text-white">Rain: {{ $todayWeather['hourly']['rain'][0] ?? 'N/A' }} mm</p>
                @else
                    <h4 class="text-white">No weather data available.</p>
                @endif
            </div>
    
            <div class="mt-5">
                <h2 class="text-white">Get Weather by Date</h2>
                <form action="{{ route('weather.fetch') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" min="{{ now()->format('Y-m-d') }}" required>
                    </div>
                    <button type="submit" class="btn" style="background-color:#4B6F44; color: white;">Get Weather</button>
                </form>
            </div>
    
            <div id="date-weather" class="mt-5">
                @if(isset($newWeatherData))
                    <h2 class="text-white">Weather on {{ request('date') }}</h3>
                    <h4 class="text-white">Temperature: {{ $newWeatherData['hourly']['temperature_2m'][0] ?? 'N/A' }}°C</p>
                    <p>Rain: {{ $newWeatherData['hourly']['rain'][0] ?? 'N/A' }} mm</p>
                @endif
            </div>
        </div>

        @endsection
    @endcomponent
@endsection

@section('footer')
    @include('layouts.footerLongPage')
@endsection