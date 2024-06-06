<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        $latitude = 22.3384;
        $longitude = 91.8317;
        $url = "https://api.open-meteo.com/v1/forecast?latitude=$latitude&longitude=$longitude&current=rain&hourly=rain,temperature_2m&daily=";

        $response = Http::get($url);

        if ($response->successful()) {
            $weatherData = $response->json();
            return view('weather.weather', ['weatherData' => $weatherData]);
        } else {
            return view('weather.weather');
            //->withErrors('Unable to fetch weather data.');
        }
    }
}
