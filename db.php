<?php

$DATABASE_HOST = getenv('DB_HOST');
$DATABASE_USER = getenv('DB_USERNAME');
$DATABASE_PASS = getenv('DB_PASSWORD');
$DATABASE_NAME = getenv('DB_NAME');

// Create connection
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>