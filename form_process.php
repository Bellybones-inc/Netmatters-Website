<?php 

// define variables and set to empty values
$name_error = $email_error = $phone_error = $subject_error = "";
$name = $company = $email = $phone = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $name_error = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["company"])) {
      $company = "";
    } else {
      $company = test_input($_POST["company"]);
    }

  if (empty($_POST["email"])) {
      $email_error = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
      }
    }

    if (empty($_POST["phone"])) {
        $phone_error = "Phone is required";
      } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/",$phone)) {
          $phone_error = "Invalid phone number";
        }
      }

      if (empty($_POST["subject"])) {
        $subject_error = "Subject is required";
      } else {
        $subject = test_input($_POST["subject"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$subject)) {
          $subject_error = "Only letters and white space allowed";
        }
      }

      if (empty($_POST["message"])) {
          $message = "";
        } else {
          $message = test_input($_POST["message"]);
        }
  }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
