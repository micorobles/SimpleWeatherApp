<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="packages/bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container-md w-50 p-3 bg-dark" style="border-radius: 0.25rem;">
        <form id="getWeatherForm">
            <div class="row text-center mb-3">
                <h1 class="text-white">Get Weather App</h1>
            </div>
            <div class="row">
                <div class="input-group mb-3">
                    <span class="input-group-text bg-secondary text-white" id="basic-addon1">Username</span>
                    <input type="text" id="Username" class="form-control" placeholder="e.g. JuanDelaCruz" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-3">
                    <span class="input-group-text bg-secondary text-white" id="basic-addon1">Email</span>
                    <input type="email" id="Email" class="form-control" placeholder="e.g. Juan@gmail.com" aria-label="Email" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-secondary text-white" id="basic-addon1">City</span>
                        <input type="text" id="City" class="form-control" placeholder="e.g. London" aria-label="City" aria-describedby="basic-addon1" required>
                    </div>
                </div>
            </div>

            <div class="d-grid mb-3 mt-3">
                <button type="submit" class="btn btn-success btn-md">Search City</button>
            </div>
        </form>
    </div>
    <!-- Weather Results -->
    <div class="weather-container">
        <!-- <div class="weather-inner-container">
            <div class="weather-header">
                    <ul>
                        <li><b>City: </b>Imus</li>
                        <li><b>State: </b>Cavite</li>
                        <li><b>Country: </b>PH</li>
                        <li><b>Timestamp: </b>029201</li>
                    </ul>
            </div>
            <div class="weather-content">
                <ul>
                    <li><img src="https://openweathermap.org/img/wn/02d@2x.png"></li>
                    <li><b>Description: </b>Scattered Clouds</li>
                    <li><b>Temperature: </b>302.58</li>
                    <li><b>Humidity: </b>84%</li>
                    <li><b>Wind: </b>1.03</li>
                </ul>
            </div>
        </div> -->
    </div>
    <script src="packages/bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="packages/Jquery/jquery-3.7.1.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/ajax.js"></script>
</body>

</html>