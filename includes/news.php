<?php

$stmt = $con->prepare('SELECT * FROM news');
$stmt->execute();
$resultSet = $stmt->get_result();
$result = $resultSet->fetch_all();

 ?>
