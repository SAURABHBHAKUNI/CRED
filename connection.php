<?php
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo"Connectin failed";
}
else{
       // echo "Connection ok";
    }
?>