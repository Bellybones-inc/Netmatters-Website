
// Database connection

<?php
  if(isset($_POST['submit'])) {

$name = $_POST["name"];
$company = $_POST["company"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$subject = $_POST ["subject"];
$message = $_POST["message"];

print_r($name);
print_r($company);
print_r($email);
print_r($phone);
print_r($subject);
print_r($message);
}

// $dbServername = "127.0.0.1";
// $dbUsername = "will";
// $dbPassword = "maine";
// $dbName = "email_upload";

// $conn = new mysqli('127.0.0.1', 'will', 'maine', 'email_upload');
//
// // Insert data Query
// $sql = "INSERT INTO contact_form (name, company, email, phone, subject, message, checkbox)
// VALUES ( '".$_POST['name']."' , '".$_POST['company']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['subject']."', '".$_POST['message']."')";

?>
