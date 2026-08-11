<?php
include "connect.php";

// Get form information
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];


// Insert into database
$sql = "INSERT INTO users (name, email, phone, gender)
        VALUES ('$name', '$email', '$phone', '$gender')";


if ($conn->query($sql) === TRUE) {

    echo "Registration Successful!";

} else {

    echo "Error: " . $conn->error;

}


$conn->close();

?>