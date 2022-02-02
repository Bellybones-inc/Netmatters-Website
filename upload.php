<?php
$dbServername = "127.0.0.1";
$dbUsername = "will";
$dbPassword = "maine";
$dbName = "email_upload";

$conn = mysqli_connect('127.0.0.1', 'will', 'maine', 'email_upload');

// Check connection
      if($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
      }

$name = $_REQUEST["name"];
$company = $_REQUEST["company"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];

$sql = "INSERT INTO contact_form  VALUES ('$name',
            '$company','$email','$phone','$subject','$message')";

  if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully." ;

        echo nl2br("\n$name\n $company\n "
            . "$email\n $phone\n $subject\n $message");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
  ?>
