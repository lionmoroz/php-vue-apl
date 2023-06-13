<?php
// Allow requests from any origin
header("Access-Control-Allow-Origin: *");

// Allow specified headers
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Allow specified methods
header("Access-Control-Allow-Methods: GET, POST, PUT");

// Allow credentials (if needed)
header("Access-Control-Allow-Credentials: true");

// Respond to preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}
?>