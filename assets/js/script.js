'use strict';

$('#getWeatherForm').on('submit', function (e) {
    e.preventDefault();

    const inputData = {
        'inputUsername': $('#Username').val(),
        'inputEmail': $('#Email').val(),
        'inputCity': $('#City').val(),
        'inputLocNumber': $('#LocNumber').val()
    };

    const url = 'callAPI.php';

    const request = getWeather(inputData, url);

    request.then((response) => {
        console.log(response);
    }).catch((error) => {
        console.error('Error: ', error);
    }); 
});