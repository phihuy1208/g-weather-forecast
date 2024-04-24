<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Contracts\View\View;

class WeatherController extends Controller
{

    public function __construct()
    {
    }

    private array $data = [];

    public function getWeather()
    {
        $city = urlencode(trim(strip_tags(request()->city)));

        $apiKey = env("WEATHER_API_KEY");
        $url = "https://api.weatherapi.com/v1/forecast.json?key=$apiKey&q=$city&days=4&aqi=no&alerts=no";
        try {
            $strData = file_get_contents($url);
        }
        catch (Exception $e) {
            return redirect()->route('home')->with(['error' => "The city name $city could not be found"]);
        }

        $data = json_decode($strData, true);
        if ($data === false) {
            return redirect()->route('home')->with(['error' => "An error occurred. Please try again"]);
        } else {
            // Xử lý dữ liệu ở đây
            $this->data['current'] = [
                'city' => $data['location']['name'],
                'time' => $data['current']['last_updated'],
                'temperature' => $data['current']['temp_c'],
                'wind' => mphToMps($data['current']['wind_mph']),
                'humidity' => $data['current']['humidity'],
                'icon' => $data['current']['condition']['icon'],
                'text' => $data['current']['condition']['text']
            ];

            $this->data['forecast'] = array_map(fn($forecastDay) => [
                'date' => $forecastDay['date'],
                'icon' => $forecastDay['day']['condition']['icon'],
                'temperature' => $forecastDay['day']['avgtemp_c'],
                'wind' => mphToMps($forecastDay['day']['maxwind_mph']),
                'humidity' => $forecastDay['day']['avghumidity'],
            ], $data['forecast']['forecastday']);
        }

        $endOfDay = strtotime('tomorrow') - 1;
        if (isset($_COOKIE['HISTORY-WEATHER-WATCH'])) {
            $historyWatch = unserialize($_COOKIE['HISTORY-WEATHER-WATCH']);

            $key = array_search($this->data['current']['city'], $historyWatch); // Tìm vị trí của giá trị 'c' trong mảng

            if($key !== false) {
                array_splice($historyWatch, $key, 1); // Xóa 1 phần tử từ vị trí đã tìm thấy
            }

            array_unshift($historyWatch, $this->data['current']['city']);
            setcookie("HISTORY-WEATHER-WATCH", serialize($historyWatch), $endOfDay);
        } else {
            setcookie("HISTORY-WEATHER-WATCH", serialize([$this->data['current']['city']]), $endOfDay);
        }

        setcookie(urlencode($this->data['current']['city']), serialize($this->data), $endOfDay);

        return view('weather', $this->data);
    }
}
