<?php

// FORM VALIDATION

// Define variables and set them to empty values
$name = $email = $message = $subject = "";
$nameErr = $emailErr = $messageErr = $subjectErr = "";


// Name validation
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST["name"])){
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $nameErr = "Only letters and whitespace allowed";
        }else{
            $nameErr = "This field is required";
        }
    }
    // Email validation.
    if (!empty($_POST["email"])){
        $email = test_input($_POST["email"]);
        // Sanitize and validate email.
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $email = test_input($_POST['email']);
        }else{
            $emailErr = "Enter a valid email address";
        }
    }else{
        $emailErr = "This field is required";
    }
    // Subject validation.
    if (!empty($_POST["subject"])){
        $subject = test_input($_POST["subject"]);
    }else{
        $subjectErr = "This field is required";
    }
    // Message Validation.
    if (!empty($_POST['message'])){
        $message = test_input($_POST["message"]);
    }else{
        $messageErr = "This is required";
    }
}

function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}



$email_from = "info@yourwebsite.com";
$email_subject = "New form submission";
$email_body = "User name: $name. \n".
    "User Email: $email. \n".
    "Subject: $subject.\n".
    "User Message: $message. \n";
$to = "milikiadbay@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");




