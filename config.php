<?php
$server = "localhost:3306";
$username = "root";
$password = "";
$db = "finalproject";

$con = new mysqli($server, $username, $password, $db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
 ?>
