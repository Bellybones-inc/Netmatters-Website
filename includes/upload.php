
<?php
include_once('dbh.php');

// Check connection
      if($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
      }

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$company = mysqli_real_escape_string($conn, $_POST["company"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$phone = mysqli_real_escape_string($conn, $_POST["phone"]);
$subject = mysqli_real_escape_string($conn, $_POST["subject"]);
$message = mysqli_real_escape_string($conn, $_POST["message"]);
$link_address = '../contact.php';

$nameclean = filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$companyclean = filter_var($company, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$emailclean = filter_var($email, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
$phoneclean = filter_var($phone, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
$subjectclean = filter_var($subject, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$messageclean = filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

$sql = "INSERT INTO contact_form(`id`, `name`, `company`, `email`, `phone`, `subject`, `message`)  VALUES
(NULL, '$nameclean', '$companyclean', '$emailclean', '$phoneclean', '$subjectclean', '$messageclean')";

  if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully." ;

        echo nl2br("\n Thank you $name\n");

        echo "<a href='".$link_address."'>Back to Contact page</a>";
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    mysqli_close($conn);
