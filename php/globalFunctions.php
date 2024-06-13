<?php

function respondWithJson($statusCode, $data) {
    http_response_code($statusCode);
    echo json_encode($data);
    exit;
}