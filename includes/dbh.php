<?php

$dbServername = "127.0.0.1";
$dbUsername = "will";
$dbPassword = "maine";
$dbName = "test";

$con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
  echo "success";
}
?>
