<?php

$dbServername = "11.100.0.9";
$dbUsername = "williams_wellingtons";
$dbPassword = "UkX9mPM}?3f^";
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
