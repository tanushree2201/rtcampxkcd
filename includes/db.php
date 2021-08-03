<?php



$servername = "remotemysql.com";
$username = "zPY7KUIiWq";
$password = "KqLsfnsYwv";
$dbname = 'zPY7KUIiWq';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}