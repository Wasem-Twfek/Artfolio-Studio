<?php

$servername = getenv('ARTFOLIO_DB_HOST') ?: 'localhost';
$username = getenv('ARTFOLIO_DB_USER') ?: '';
$password = getenv('ARTFOLIO_DB_PASSWORD') ?: '';
$dbname = getenv('ARTFOLIO_DB_NAME') ?: 'artfolio_db';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    error_log('Artfolio database connection failed: ' . mysqli_connect_error());
    http_response_code(500);
    exit('Database connection unavailable.');
}
