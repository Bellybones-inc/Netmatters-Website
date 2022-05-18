
<?php

//DB connect
$dbServername = "127.0.0.1";
$dbUsername = "will";
$dbPassword = "maine";
$dbName = "email_upload";

$conn = mysqli_connect('127.0.0.1', 'will', 'maine', 'email_upload');

// Check connection
      if($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
      }

// $id = $_REQUEST["id"];
// $name = $_REQUEST["name"];
// $company = $_REQUEST["company"];
// $email = $_REQUEST["email"];
// $phone = $_REQUEST["phone"];
// $subject = $_REQUEST["subject"];
// $message = $_REQUEST["message"];

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$company = mysqli_real_escape_string($conn, $_POST["company"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$phone = mysqli_real_escape_string($conn, $_POST["phone"]);
$subject = mysqli_real_escape_string($conn, $_POST["subject"]);
$message = mysqli_real_escape_string($conn, $_POST["message"]);
$link_address = '../contact.php';

$sql = "INSERT INTO contact_form(`id`, `name`, `company`, `email`, `phone`, `subject`, `message`)  VALUES
(NULL, '$name', '$company', '$email', '$phone', '$subject', '$message')";

  if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully." ;

        echo nl2br("\n Thank you $name\n");

        echo "<a href='".$link_address."'>Back to Contact page</a>";
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
