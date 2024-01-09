<?php
require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["mail"];
    $address = $_POST["address"];
    $phone = $_POST["Phone"];
    $police_station = $_POST["station"];
    $description = $_POST["Feedback"];

    $sql = "INSERT INTO feedback (name, email, address, phone, police_station, description)
              VALUES ('$name', '$email', '$address', '$phone', '$police_station', '$description');";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
