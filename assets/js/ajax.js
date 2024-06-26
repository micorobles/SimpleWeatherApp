// 'use strict';

function ajaxRequest(data, url) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: '/simple-weather-app/php/' + url,
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(data),
            success: function (res) {
                
                let response = JSON.parse(res);

                resolve(response);
            },
            error: function (err) {
                reject(err);
            }
        });
    });
}