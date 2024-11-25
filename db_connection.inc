<?php
//db_connect.inc
//Check what server you are accessing
{
    $servername = "talsprddb02.int.its.rmit.edu.au";
    $username = "s3901805";
    $password = "yodragonKing";
    $dbname = "s3901805";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}