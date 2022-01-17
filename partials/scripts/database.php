<?php
// Setup
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'university');

// Connessione
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
var_dump($conn);

// Check
if($conn->connect_error) {
    die('Si è verificato un errore.');
}

echo '<h1>DB OK</h1>';