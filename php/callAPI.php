<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data = json_decode(file_get_contents('php://input'));

    if ($data === null || empty($data->inputUsername) || empty($data->inputEmail) || empty($data->inputCity) 
        || empty($data->inputLocNumber)) {
    
        http_response_code(400); // Bad Request
        echo json_encode(array('error' => 'Null Data', 'data' => $data));
    } else {

        
    
        http_response_code(200); // OK  
        echo json_encode(array('succes' => 'Data received', 'data' => $data));
    }
    exit;
}

