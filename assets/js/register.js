'use strict';

$('#signUpForm').on('submit', function(e) {
    e.preventDefault();

    const url = 'register.php';

    if ($('#username').val() == '' || $('#email').val() == '' || $('#password').val() == ''){ 
        alert('Fill out the blanks');
        // return; 
    }

    const singUpInput = {
        'username' : $('#username').val(),
        'email' : $('#email').val(), 
        'password' : $('#password').val(), 
    };

    const registerUser = ajaxRequest(singUpInput, url);
    
    registerUser.then((response) => {
        console.log(response);
        
        this.reset(); // Reset input fields
    }).catch((error) => {
        console.error('Error: ', error);
    });

});