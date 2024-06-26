<?php

require_once(dirname(__FILE__) . '/globalFunctions.php');
require_once(dirname(__FILE__) . '/class/users.php');

$user = new User();

// USER SIGN UP
if (!$_SERVER['REQUEST_METHOD'] == 'POST') {
    respondWithJson(400, array('error' => 'Request error'));
}

$data = json_decode(file_get_contents('php://input'));

if ( !$data || empty($data->username) || empty($data->password) ) {

    respondWithJson(404, array('error' => 'Null Data', 'data' => $data));
}

$loginUser = $user->login($data->username, $data->password);

if ($loginUser){
    respondWithJson(200, array('message' => 'User " ' . $data->username . ' " was validated '));
} else {
    respondWithJson(500, array('message' => 'Error validating user'));
}