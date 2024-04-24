@if(isset($forecast))
    <div class="container">
        <h4 class="my-md-4">4-Day Forecast</h4>
        <div class="d-flex justify-content-between">
            @foreach($forecast as $forecastDay)
                <div class="card bg-secondary text-white px-2">
                    <div class="card-body">
                        <h5 class="card-title">({{$forecastDay['date']}})</h5>
                        <img src="{{$forecastDay['icon']}}" alt="Weather Icon">
                        <p class="card-text">Temperature: {{ $forecastDay['temperature']}}°C</p>
                        <p class="card-text">Wind: {{$forecastDay['wind']}} M/S</p>
                        <p class="card-text">Humidity: {{$forecastDay['humidity']}} %</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
