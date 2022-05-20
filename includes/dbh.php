<?php

$dbServername = "127.0.0.1";
$dbUsername = "will";
$dbPassword = "maine";
$dbName = "test";

// $dbServername = "localhost";
// $dbUsername = "williams_sears";
// $dbPassword = "6O6nNLI8p2DwLeQI1m7t";
// $dbName = "williams_netmatters";


try {
    $con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    if (!$con) {
      throw new Exception('MySQL Connection Database Error: ' . mysql_error());
    } else {
      // echo "Connected";
    }
  }
catch (Exception $e)
{
  echo $e->getMessage();
}

$conn = mysqli_connect('127.0.0.1', 'will', 'maine', 'test');

// $conn = mysqli_connect('localhost', 'williams_sears', '6O6nNLI8p2DwLeQI1m7t', 'williams_netmatters');


?>
