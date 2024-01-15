<?php
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    $sql = "INSERT INTO subscribers (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Subscription successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
