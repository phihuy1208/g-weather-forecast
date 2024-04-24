<h2 class="mb-3">Enter a City Name</h2>
<form action="/weather" method="get">
    <input type="text" class="form-control my-lg-4" name="city" placeholder="E.g., New York, London, Tokyo" value="{{old('city')}}">
    @if(session('error'))
        <div class="text-danger mb-3">{{session('error')}}</div>
    @endif
    <button type="submit" class="btn btn-primary w-100 py-2">Search</button>
</form>
<div class="separator my-lg-3"><span>or</span></div>
<button type="submit" class="btn btn-secondary w-100 py-2 mb-lg-4" onclick="loadGeoLocation()">Use Current Location</button>

