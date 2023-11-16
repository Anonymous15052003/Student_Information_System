<?php
// Replace these credentials with your actual MySQL credentials
$servername = "localhost";
$SRN = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $SRN, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process signup form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $SRN = $_POST["SRN"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (SRN, password) VALUES ('$SRN', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
