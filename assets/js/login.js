'use strict';

$('#loginForm').on('submit', function(e) {
    e.preventDefault();

    const url = 'login.php';

    if ($('#username').val() == '' || $('#password').val() == ''){ 
        alert('Fill out the blanks');
    }

    const loginInput = {
        'username' : $('#username').val(), 
        'password' : $('#password').val(), 
    };

    const loginUser = ajaxRequest(loginInput, url);
    
    loginUser.then((response) => {
        console.log(response);
        this.reset();

        window.location.href = 'php/templates/getWeather_page.php';

        // setTimeout(() => {
        //     alert(`Welcome ${loginInput.username}`);
        // }, 2000);

    }).catch((error) => {
        console.error('Error: ', error);
    });

});