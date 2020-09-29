<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pcraft";

$connection = new mysqli($servername, $username, $password, $database);

if($connection->connect_error) {
    die("Connection error");
} else {
    // echo "Connect Successful";
}