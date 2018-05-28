<?php
// Including database connections
require_once 'DBConnection/database_connections.php';
// Fetching and decoding the inserted data
$data = json_decode(file_get_contents("php://input"));
// Escaping special characters from submitting data & storing in new variables.
$name = mysqli_real_escape_string($con, $data->uname);
$email = mysqli_real_escape_string($con, $data->email);
$password = mysqli_real_escape_string($con, $data->password);

// mysqli insert query
$query = "INSERT into Members (Username,Email,Password) VALUES ('$name','$email','$password')";
// Inserting data into database
mysqli_query($con, $query);
echo true;
?>