<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    private $apiBaseUrl = 'https://api.open-meteo.com/v1/forecast';

    public function show()
    {
        $todayWeather = $this->getWeatherData(now()->format('Y-m-d'));
        return view('weather.weatherPage', compact('todayWeather'));
    }

    public function fetch(Request $request)
    {
        $request->validate([
            'date' => 'required|date|after_or_equal:today',
        ]);

        $date = $request->input('date');
        $newWeatherData = $this->getWeatherData($date);

        $todayWeather = $this->getWeatherData(now()->format('Y-m-d'));

        return view('weather.weatherPage', compact('todayWeather', 'newWeatherData'));
    }

    private function getWeatherData($date)
    {
        $response = Http::get($this->apiBaseUrl, [
            'latitude' => '23.7104',
            'longitude' => '90.4074',
            'start_date' => $date,
            'end_date' => $date,
            'hourly' => 'temperature_2m,rain',
        ]);

        return $response->json();
    }
}
