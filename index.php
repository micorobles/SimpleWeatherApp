<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="packages/bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        #forgotPassword:hover {
            /* color: red !important; */
            text-decoration: underline;
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #3e3e3e;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <section class="vh-100" >
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="assets/img/login_img.jpg"
                        class="img-fluid" alt="Sample image">
                </div>
            </div>
            <div class="row">
                <div class="input-group mb-3">
                    <span class="input-group-text bg-secondary text-white" id="basic-addon1">@</span>
                    <input type="email" id="Email" class="form-control" placeholder="Email" aria-label="Email"
                        aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-secondary text-white" id="basic-addon1">@</span>
                        <input type="text" id="City" class="form-control" placeholder="City name" aria-label="City"
                            aria-describedby="basic-addon1" required>
                    </div>
                </div>
                <!-- <div class="col">
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-secondary text-white" id="basic-addon2">0</span>
                        <input type="text" id="LocNumber" class="form-control" placeholder="Number of locations"
                            aria-label="LocNumber" aria-describedby="basic-addon2" required>
                    </div>
                </div> -->
            </div>

            <div class="d-grid mb-3 mt-3">
                <button type="submit" class="btn btn-success btn-md">Search City</button>
            </div>
        </form>
    </div>
    <!-- Weather Results -->
    <div class="weather-container">
        <div class="weather-inner-container">
            <div class="weather-header">
                <ul>
                    <li><b>Name: </b>Imus</li>
                    <li><b>State: </b>Cavite</li>
                    <li><b>Country: </b>PH</li>
                </ul>
            </div>
            <div class="weather-content">
                <ul>
                    <li><img src="https://openweathermap.org/img/wn/02d@2x.png"></li>
                    <li><b>Description: </b>Scattered Clouds</li>
                    <li><b>Temperature: </b>302.58</li>
                    <li><b>Humidity: </b>84</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="packages/bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="packages/Jquery/jquery-3.7.1.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/ajax.js"></script>
</body>

</html>