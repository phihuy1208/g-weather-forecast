@extends('layout.master')

@section('weather-watch')
    <div class="container">
        <div class="card bg-primary text-white p-2">
            <div class="card-body">
                <div class="container col-2 d-flex flex-column justify-content-center align-items-center">
                    <img class="w-75" src="{{asset('assets/clients/img/weather-icon.png')}}" alt="weather-watch-icon">
                    <p>Weather watch</p>
                </div>

                <div class="page-wrap d-flex flex-row align-items-center">
                    <div class="container text-white">
                        <div class="row justify-content-center">
                            <div class="col-md-12 text-center">
                                <span class="display-1 d-block">404</span>
                                <div class="mb-4 lead">The page you are looking for was not found.</div>
                                <a href="/" class="btn btn-link text-white">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
