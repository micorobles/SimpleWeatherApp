// 'use strict';

function getWeather(data, url) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: 'php/' + url,
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(data),
            success: function (res) {
                let response = JSON.parse(res);
                // console.log(response);
                resolve(response);
            },
            error: function (err) {
                // console.error(err);
                reject(err);
            }
        });
    });
}