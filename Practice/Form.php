<?php
// Define variables and set empty values.
$name = $email = $website = $gender = $comment = "";
$nameErr = $emailErr = $websiteErr = $genderErr = "";

// Function to validate form data.

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])){
        $nameErr = "Name is required";
    }else{
        $name = test_input($_POST["name"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $nameErr = "Only letters and whitespace allowed";
        }
    }
    if (empty($_POST["email"])){
        $emailErr = "Email is required";
    }else{
        $email = test_input($_POST["email"]);
        // Check if an email address is well-formed.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
        }
    }
    if (empty($_POST["website"])){
        $website = "";
    }else{
        $website = test_input($_POST["website"]);
        // Check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
            $websiteErr = "Invalid URL";
        }
    }
    if (empty($_POST["gender"])){
        $genderErr = "Gender is required";
    }else{
        $gender = test_input($_POST["gender"]);
    }
    if (empty($_POST["comment"])){
        $comment = "";
    }else{
        $comment = test_input($_POST["comment"]);
    }

}

function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Abdulmalik Adebayo">
    <meta name="keywords" content="HTML, PHP">
    <meta name="description" content="Form Validation">
    <title>Form validation</title>
</head>
<style>
    .error{
        color: #FF0000;
    }
</style>
<body>
<h2>PHP Form Validation</h2>
<p><span class="error">* required field</span></p>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="name" >Name:</label><br/>
    <input type="text" name="name" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr; ?></span><br/>
    <label for="email">Email:</label><br/>
    <input type="email" name="email" value="<?php echo $email;?>"><span class="error">* <?php echo $emailErr; ?></span><br/>
    <label for="website">Website:</label><br/>
    <input type="text" name="website" value="<?php echo $website;?>"><span class="error"><?php echo $websiteErr; ?></span><br/>
    <label for="comment">Comment:</label><br/>
    <textarea name="comment" id="comment" cols="30" rows="10"><?php echo $comment;?></textarea><br/>
    <label for="gender">Gender:</label>
    <input type="radio" name="gender"
        <?php if (isset($gender) && $gender == "Male") echo "checked"?> value="Male"><label for="male">Male</label>
    <input type="radio" name="gender"
           <?php if (isset($gender) && $gender == "Female") echo "checked"?>value="Female"><label for="female">Female</label>
    <input type="radio" name="gender"
           <?php if (isset($gender) && $gender == "Other") echo "checked"?> value="Others"> <label for="others">Other</label>
    <span class="error">* <?php echo $genderErr; ?></span><br/>
    <input type="submit" name="submit" id="submit">

</form>

<?php

echo "<h2> Your Input:</h2>";
echo $name. "<br/>";
echo $email. "<br/>";
echo $website. "<br/>";
echo $gender. "<br/>";
echo $comment. "<br/>";

?>
</body>
</html>