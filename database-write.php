<?php

$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['phone']));
$message = Trim(stripslashes($_POST['message']));


$dbhost = "localhost";
$dbuser = "contact-form";
$dbpass = "coffee";
$dbname = "contact-form";

// Create connection
$connection = new mysqli($dbhost, $dbuser, $dbpass, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$query = "INSERT INTO website (Name, Email, Phone, Message) VALUES ('$name', '$email', '$phone', '$message')";

$result = mysqli_query($connection, $query);

$NumberOfRowsAffected = mysqli_affected_rows($connection);
if($NumberOfRowsAffected < 1 ) {
 die('No records were written to the database. Waaaa!');
} 

mysqli_close($connection);

header("Location: database-read.php");

?>
