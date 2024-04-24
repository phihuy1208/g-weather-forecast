@if(isset($current))
    <div class="container">
        <div class="card bg-primary text-white p-2">
            <div class="card-body row">
                <div class="container col-8">
                    <h4 class="card-title">{{ $current['city']}} ({{$current['time']}})</h4>
                    <p class="card-text">Temperature: {{ $current['temperature'] }}°C</p>
                    <p class="card-text">Wind: {{ $current['wind'] }} M/S</p>
                    <p class="card-text">Humidity: {{ $current['humidity'] }}%</p>
                </div>
                <div class="container col-2 d-flex flex-column justify-content-center align-items-center">
                    <img class="w-75" src="{{$current['icon']}}">
                    <p>{{$current['text']}}</p>
                </div>
            </div>
        </div>
    </div>
@endif
