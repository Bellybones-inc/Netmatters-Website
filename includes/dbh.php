<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "nL=jpZM2_O9L";
$dbName = "williams_netmatters";

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

$stmt = $con->prepare('SELECT * FROM news');
$stmt->execute();
$resultSet = $stmt->get_result();
$result = $resultSet->fetch_all();

foreach ($result as $r)
{
  echo $r['title'];
}
?>
