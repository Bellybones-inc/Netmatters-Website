<?php

$dbServername = "127.0.0.1";
$dbUsername = "will";
$dbPassword = "maine";
$dbName = "test";

try {
    $con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    if (!$con) {
      throw new Exception('MySQL Connection Database Error: ' . mysql_error());
    } else {
      echo "Connected";
    }
  }
catch (Exception $e)
{
  echo $e->getMessage();
}


    // $con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// if ($con->connect_error)
// { die('Error'.(".$con->connect_errno.")".$con->connect_error");
// } else {
//   echo "Connected to Database";
// }


//Check connection
// if ($con -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// } else {
//   echo "success";
// }
?>
