<?php

$SERVER = 'localhost';
$USERNAME = 'root';
$PASSWORD = 'root123asi847';
$DATABASE = 'tipping-app';

$conn = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (!$conn) {
    die("MySQL connection Error: " . mysqli_connect_error);
}

?>