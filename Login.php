<?php
// Including database connections
require_once 'DBConnection/database_connections.php';

//passing data from angular to PHP
$data = json_decode(file_get_contents("php://input"));

// mysqli query to fetch all data from database
$query = "SELECT * from Members Where Username='" . $data->loginemail . "' AND Password='" . $data->loginpassword . "' LIMIT 1";
$result = mysqli_query($con, $query);
$arr = array();
if(mysqli_num_rows($result) != 0) {
while($row = mysqli_fetch_assoc($result)) {
$arr[] = $row;
}
}
// Return json array containing data from the databasecon
echo $json_info = json_encode($arr);
?>