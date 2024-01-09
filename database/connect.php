<?php
$servername = "localhost";
$username = "root";
$password = "hi565mit";
$dbname = "police_feedback";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
