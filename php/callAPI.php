<?php
require_once(dirname(__FILE__) . '/globalFunctions.php');

define('APPID', '6c4d2d1324d73983dcbd059054057f12');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = json_decode(file_get_contents('php://input'));

    if (
        !$data || empty($data->inputUsername) || empty($data->inputEmail) || empty($data->inputCity)
        || empty($data->inputLocNumber)
    ) {

        respondWithJson(400, array('error' => 'Null Data', 'data' => $data));
        // http_response_code(400); // Bad Request
        // echo json_encode(array('error' => 'Null Data', 'data' => $data));
    }

    $coordinates = getCoordinates($data);

    if (is_string($coordinates)) {
        respondWithJson(500, array('error' => $coordinates));
    }

    if (empty($coordinates)) {
        respondWithJson(404, array('error' => 'No coordinates found'));
    }

    $firstCoordinate = $coordinates[0];
    $latitude = $firstCoordinate['lat'];
    $longitude = $firstCoordinate['lon'];

    $currentWeather = getCurrentWeather($latitude, $longitude);

    if (is_string($currentWeather)) {
        respondWithJson(500, array('error' => $currentWeather));
    }

    if (empty($currentWeather)) {
        respondWithJson(404, array('error' => 'No weather found'));
    }

    respondWithJson(200, array(
        'success' => 'Data received',
        'coordinates' => $coordinates,
        'currentWeather' => $currentWeather
    ));
}

function getCoordinates($data)
{
    $api_url = 'http://api.openweathermap.org/geo/1.0/direct?q=' . urlencode($data->inputCity) . '&limit=' . urlencode($data->inputLocNumber) . '&appid=' . APPID;

    // Initialize cURL
    $ch = curl_init($api_url);

    // Setup cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // Execute
    $coordinate_response = curl_exec($ch);

    if (!$coordinate_response) {
        $error = curl_error($ch);
        curl_close($ch);
        return $error;
    }

    curl_close($ch);

    $json = json_decode($coordinate_response, true);

    return $json;
}

function getCurrentWeather($lat, $lon)
{
    $api_url = 'https://api.openweathermap.org/data/2.5/weather?lat=' . $lat . '&lon=' . $lon . '&appid=' . APPID;

    $ch = curl_init($api_url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    $weather_response = curl_exec($ch);

    if (!$weather_response) {
        $error = curl_error($ch);
        curl_close($ch);
        return $error;
    }

    curl_close($ch);

    $json = json_decode( $weather_response, true);

    return $json;
}
