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
