<?php
$servername = "sql1.njit.edu";
$username = "arn46";
$password = "Birdboy10!";
$dbname = "SQLconfig";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
