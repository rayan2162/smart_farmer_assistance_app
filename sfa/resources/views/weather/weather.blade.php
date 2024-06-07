@extends('layout.main')

@section('navbar')
    @include('layout.navbar')
@endsection


@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://source.unsplash.com/typhoon-i9w4Uy1pU-s')
        @slot('title', 'Stay Updated with the Latest Weather Forecasts')
        @slot('leadText', 'Get accurate and up-to-date weather information to plan your farming activities.')
        @slot('description', 'Our weather forecast service provides you with real-time updates on temperature, rain predictions, and more. Make informed decisions and optimize your farming operations with reliable weather data.')
    @endcomponent
@endsection



@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4" style="color: #4B6F44;">Weather Forecast</h2>
    
    @if(isset($weatherData))
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead style="background-color: #4B6F44; color: white;">
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Temperature (°C)</th>
                        <th>Rain (mm)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($weatherData['hourly']['time'] as $index => $time)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($time)->format('Y-m-d') }}</td>
                            <td>{{ \Carbon\Carbon::parse($time)->format('H:i') }}</td>
                            <td>{{ $weatherData['hourly']['temperature_2m'][$index] }}</td>
                            <td>{{ $weatherData['hourly']['rain'][$index] ?? '0.0' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-danger">
            Unable to fetch weather data. Please try again later.
        </div>
    @endif
</div>
@endsection
