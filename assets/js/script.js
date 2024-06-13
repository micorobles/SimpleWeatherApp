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
        displayWeather(response);
    }).catch((error) => {
        console.error('Error: ', error);
    });
});

function displayWeather(data) {
    const coordinates = data.coordinates;
    const weathers = data.currentWeathers;

    console.log('Coords: ', coordinates);
    console.log('Weathers: ', weathers);

    $('.weather-container').empty();

    for (var i = 0; i < coordinates.length; i++) {

        let output = `  <div class="weather-inner-container">
                            <div class="weather-header">
                                <ul>
                                    <li><b>Name: </b>${coordinates[i].name}</li>
                                    <li><b>State: </b>${coordinates[i].state ?? 'N/A'}</li>
                                    <li><b>Country: </b>${coordinates[i].country}</li>
                                    <li><b>Timestamp: </b>${convertTimeStamp(weathers[i].dt)}</li>
                                </ul>
                            </div>
                            <div class="weather-content">
                                <ul>
                                    <li><img src="https://openweathermap.org/img/wn/${weathers[i].weather[0].icon}@2x.png"></li>
                                    <li><b>Description: </b>${weathers[i].weather[0].description}</li>
                                    <li><b>Temperature: </b>${weathers[i].main.temp}</li>
                                    <li><b>Humidity: </b>${weathers[i].main.humidity}%</li>
                                    <li><b>Wind: </b>${weathers[i].wind.speed}</li>
                                </ul>
                            </div>
                        </div>
                    `;

        $('.weather-container').append(output);
    }
}

function convertTimeStamp(timestamp) {

      // Convert timestamp to milliseconds
    var date = new Date(timestamp * 1000);
                
    // Define month names
    var monthNames = ["January", "February", "March", "April", "May", "June",
                      "July", "August", "September", "October", "November", "December"];

    // Format the date
    var year = date.getFullYear();
    var month = monthNames[date.getMonth()];
    var day = ('0' + date.getDate()).slice(-2);
    var hours = ('0' + date.getHours()).slice(-2);
    var minutes = ('0' + date.getMinutes()).slice(-2);
    var seconds = ('0' + date.getSeconds()).slice(-2);

    // Construct the formatted date string
    var formattedDate = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
    return formattedDate;
}