@extends('layout.master')

@section('weather-watch')
    <div class="container">
        <div class="card bg-primary text-white p-2">
            <div class="card-body">
                <div class="container col-2 d-flex flex-column justify-content-center align-items-center">
                    <img class="w-75" src="{{asset('assets/clients/img/weather-icon.png')}}" alt="weather-watch-icon">
                    <p>Weather watch</p>
                </div>

                <h4 class="card-title text-center">Check weather now.</h4>
            </div>
        </div>
    </div>
@endsection


