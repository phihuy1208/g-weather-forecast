@extends('layout.master')

@section('sidebar')
    @parent
    <h2 class="my-3 text-center">History of searches today</h2>
    @if(isset($_COOKIE['HISTORY-WEATHER-WATCH']))
        @php
            $historyWatch = unserialize($_COOKIE['HISTORY-WEATHER-WATCH']);
        @endphp
        <div class="list-group">
            @foreach($historyWatch as $city)
                <a href="/history/{{$city}}" class="list-group-item list-group-item-action">{{$city}}</a>
            @endforeach
        </div>
        @endif
@endsection

@section('weather-watch')
    @include('blocks.weatherWatch')
@endsection

@section('4-day-forecast')
    @include('blocks.fourDayCast')
@endsection
