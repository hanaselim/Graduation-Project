<?php

$servername = "localhost";
$username = "id13088119_codebreakers";
$password = "B^/SNGrtsj1aolPD";
$database = "id13088119_clairo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?>