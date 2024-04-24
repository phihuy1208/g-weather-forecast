function loadGeoLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            const apiKey = "AIzaSyDb1Z0_wrxO-03Fovncntw24BJkx5XENOU";
            const url = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${latitude},${longitude}&key=${apiKey}`;

            fetch(url)
                .then((response) => response.json())
                .then((data) => {
                    // Parse the city name from the API response
                    const resultLength = data.results.length;
                    const city = data.results[resultLength - 2].address_components[0].long_name;
                    window.location.href = window.location.origin + "/weather?city=" + city;
                })
                .catch((error) => console.log(error));
        });
    }
    else {
        console.log("Geolocation is not supported by this browser.");
    }
}
